<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Message;
use App\Model\User;

class MessageController extends Controller
{
    private $fields_messages = array(
        'id',
        'user_id',
        'title',
        'description',
        'status',
        'created_by',
        'is_read',
    );

    /**
    * Create a new auth instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $param_insert = array(
            'name' => 'message_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $message = Message::with('user');
        $message = $message->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $message = $message->where('description', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_messages))) {
                foreach ($explode_by as $key => $value) {
                    $message = $message->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($message, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_messages)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $message = $message->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($message, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $message = $message->offset($offset);
            $message = $message->limit($req->input('limit'));
        }

        $message = $message->get();

        $result = $this->generate_response($message, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $param_insert = array(
            'name' => 'message_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'user_id' => 'required',
          'title' => 'required|max:255',
          'description' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($message,400,'Bad Request.',true);
            
            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $message = new Message();
            $message->user_id = $req->has('user_id') ? $req->user_id : 0;
            $message->title = $req->has('title') ? $req->title : '';
            $message->description = $req->has('description') ? $req->description : '';
            $message->status = $req->has('status') ? $req->status : 'active';
            $message->save();

            $result = $this->generate_response($message,200,'Data Has Been Saved.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'message_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $message = Message::with('user')->where('status','!=','deleted')->find($id);

        if(!$message){
            $result = $this->generate_response($message, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($message, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {   
        $param_insert = array(
            'name' => 'message_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );
        
        $access_log_id = $this->create_access_log($param_insert);
        
        /* Validation */
        $validator = Validator::make($req->all(), [
            'user_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
            'is_read' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($message,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $message = Message::find($id);
            if(!$message){
                $result = $this->generate_response($message, 404, 'Data Not Found.', true);
                $this->update_access_log($access_log_id, $result);
                return response()->json($result, 404);
            }else{
                $message->user_id = $req->has('user_id') ? $req->user_id : $message->user_id;
                $message->title = $req->has('title') ? $req->title : $message->title;
                $message->description = $req->has('description') ? $req->description : $message->description;
                $message->status = $req->has('status') ? $req->status : $message->status;
                $message->is_read = $req->has('is_read') ? $req->is_read : $message->is_read;
                $message->save();
                $result = $this->generate_response($message,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'message_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $message = Message::where('status', '!=', 'deleted')->find($id);
        
        if(!$message){
            $result = $this->generate_response($message, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $message->status = 'deleted';
            $message->save();

            $result = $this->generate_response($message,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function get_by_user($id)
    {
        $param_insert = array(
            'name' => 'message_show_by_user',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);
  
        $message = Message::where('status','!=','deleted')->where('user_id',$id)->get();

        if(!$message){
            $result = $this->generate_response($message, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($message, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
