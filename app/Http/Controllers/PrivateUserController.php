<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PrivateGuide;
use App\Model\PrivateUser;
use Illuminate\Support\Facades\Mail;

class PrivateUserController extends Controller
{
    private $fields_privateusers = array(
        'id',
        'user_id',
        'created_at',
        'updated_at',
        'status'
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
            'name' => 'privateuser_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $privateuser = new PrivateUser;
        $privateuser = $privateuser->with('private_guide', 'user');
        $privateuser = $privateuser->where('status', '!=', 'deleted');
        
        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $privateuser = $privateuser->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_privateusers))) {
                foreach ($explode_by as $key => $value) {
                    $privateuser = $privateuser->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($privateuser, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_privateusers)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $privateuser = $privateuser->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($privateuser, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $privateuser = $privateuser->offset($offset);
            $privateuser = $privateuser->limit($req->input('limit'));
        }

        $privateuser = $privateuser->get();

        $result = $this->generate_response($privateuser, 200, 'All Data.', false);

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
            'name' => 'privateuser_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'user_id' => 'required',
          // 'answer' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($privateuser,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $privateuser = new PrivateUser();

            $privateuser->user_id = $req->has('user_id') ? $req->user_id : 0;
            $privateuser->status = $req->has('status') ? $req->status : 'active';

            $privateuser->save();

            $result = $this->generate_response($privateuser, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrivateUser  $privateuser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'privateuser_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $privateuser = new PrivateUser;
        $privateuser = $privateuser->where('status','!=','deleted');
        $privateuser = $privateuser->with('private_guide', 'user');
        $privateuser = $privateuser->find($id);

        if(!$privateuser){
            $result = $this->generate_response($privateuser, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($privateuser, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivateUser  $privateuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $param_insert = array(
            'name' => 'privateuser_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'user_id' => 'required',
            // 'answer' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($privateuser,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $privateuser = PrivateUser::find($id);

            if($privateuser){
                $privateuser->user_id = $req->has('user_id') ? $req->user_id : $privateuser->user_id;
                $privateuser->status = $req->has('status') ? $req->status : $privateuser->status;
                $privateuser->save();

                $result = $this->generate_response($privateuser,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }else{
                $result = $this->generate_response($privateuser, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivateUser  $privateuser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'privateuser_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $privateuser = PrivateUser::where('status','!=','deleted')->find($id);
        
        if(!$privateuser){
            $result = $this->generate_response($privateuser, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $privateuser->status = 'deleted';
            $privateuser->save();

            $result = $this->generate_response($privateuser,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
