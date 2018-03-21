<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\TipTrick;
use App\Model\User;
use Illuminate\Support\Facades\Mail;

class TipTrickController extends Controller
{
    private $fields_tiptricks = array(
        'id',
        'title',
        'description',
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
        $tiptrick = new TipTrick;
        $tiptrick = $tiptrick->where('status', '!=', 'deleted');
        
        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $tiptrick = $tiptrick->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_tiptricks))) {
                foreach ($explode_by as $key => $value) {
                    $tiptrick = $tiptrick->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($tiptrick, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_tiptricks)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $tiptrick = $tiptrick->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($tiptrick, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $tiptrick = $tiptrick->offset($offset);
            $tiptrick = $tiptrick->limit($req->input('limit'));
        }

        $tiptrick = $tiptrick->get();

        $result = $this->generate_response($tiptrick, 200, 'All Data.', false);

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
        /* Validation */
        $validator = Validator::make($req->all(), [
          'title' => 'required|max:255',
          'description' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tiptrick,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $user = new User;
            $user = $user->where('status', '!=', 'deleted')->get();
            
            foreach($user as $u){
                $data['to']         = $u['email'];
                $data['alias']      = 'Admin Pandu';
                $data['subject']    = 'TIPS DAN TRICK BARU ';
                $data['content']    = "Check Your Cell Soon There are New Tips And Tricks. <br/> Please open your Apps to check it directly.";
                $data['name']       = $u['username'];

                $email              = $data;
                Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                    $send->to($email['to'])->subject($email['subject']);
                    $send->from('admin@pandu.com', $email['alias']);
                });
            }
            
            $tiptrick = new TipTrick();
            $tiptrick->title = $req->has('title') ? $req->title : '';
            $tiptrick->description = $req->has('description') ? $req->description : '';
            $tiptrick->status = 'active';
            $tiptrick->save();
            $result = $this->generate_response($tiptrick,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiptrick = TipTrick::where('status','!=','deleted')->find($id);

        if(!$tiptrick){
            $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($tiptrick, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tiptrick,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $tiptrick = TipTrick::find($id);
            if(!$tiptrick){
                $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $tiptrick->title = $req->has('title') ? $req->title : $tiptrick->title;
                $tiptrick->description = $req->has('description') ? $req->description : $tiptrick->description;
                $tiptrick->status = $req->has('status') ? $req->status : $tiptrick->status;
                $tiptrick->save();
                $result = $this->generate_response($tiptrick,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiptrick = TipTrick::where('status','!=','deleted')->find($id);
        
        if(!$tiptrick){
            $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $tiptrick->status = 'deleted';
            $tiptrick->save();
            $result = $this->generate_response($tiptrick,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

    private function check_where($where_by, $where_fields)
    {
        foreach ($where_by as $key => $value) {
            if (!in_array($value, $where_fields)) {
                return false;
            }
        }

        return true;
    }
}
