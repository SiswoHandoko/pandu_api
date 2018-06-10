<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PrivateGuide;
use App\Model\PrivateUser;
use Illuminate\Support\Facades\Mail;

class PrivateGuideController extends Controller
{
    private $fields_privateguides = array(
        'id',
        'private_user_id',
        'question_id',
        'answer',
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
        // $param_insert = array(
        //     'name' => 'privateguide_index',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $privateguide = new PrivateGuide;
        $privateguide = $privateguide->where('status', '!=', 'deleted');
        
        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $privateguide = $privateguide->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_privateguides))) {
                foreach ($explode_by as $key => $value) {
                    $privateguide = $privateguide->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($privateguide, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_privateguides)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $privateguide = $privateguide->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($privateguide, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $privateguide = $privateguide->offset($offset);
            $privateguide = $privateguide->limit($req->input('limit'));
        }

        $privateguide = $privateguide->get();

        $result = $this->generate_response($privateguide, 200, 'All Data.', false);

        // $this->update_access_log($access_log_id, $result);

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
            'name' => 'privateguide_store',
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
            $result = $this->generate_response($privateguide,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $privateuser = new PrivateUser();

            $privateuser->user_id = $req->has('user_id') ? $req->user_id : 0;
            $privateuser->status = $req->has('status') ? $req->status : 'active';

            $privateuser->save();

            if ($privateuser) {
                $i = 1;

                foreach ($req->answer as $key => $value) {
                    $privateguide = new PrivateGuide();

                    $privateguide->question_id = $i;
                    $privateguide->private_user_id = $privateuser->id;
                    $privateguide->answer = $value;
                    $privateguide->status = $req->has('status') ? $req->status : 'active';

                    $privateguide->save();

                    $arr_privateguide[] = $privateguide;

                    $i++;
                }

                $result = $this->generate_response($arr_privateguide,200,'Data Has Been Saved.',false);
            } else {
                $result = $this->generate_response($privateuser,400,'Bad Request.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }

            $privateuser_result = new PrivateUser;
            $privateuser_result = $privateuser_result->where('status','!=','deleted');
            $privateuser_result = $privateuser_result->with('private_guide');
            $privateuser_result = $privateuser_result->find($privateuser->id);

            $result = $this->generate_response($privateuser_result, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrivateGuide  $privateguide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $param_insert = array(
        //     'name' => 'privateguide_show',
        //     'params' => '',
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $privateguide = PrivateGuide::where('status','!=','deleted')->find($id);

        if(!$privateguide){
            $result = $this->generate_response($privateguide, 404, 'Data Not Found.', true);

            // $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($privateguide, 200, 'Detail Data.', false);

            // $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivateGuide  $privateguide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $param_insert = array(
            'name' => 'privateguide_update',
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
            $result = $this->generate_response($privateguide,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $privateguide = PrivateGuide::find($id);
            if(!$privateguide){
                $result = $this->generate_response($privateguide, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            }else{
                $privateguide->user_id = $req->has('user_id') ? $req->user_id : $privateguide->user_id;
                $privateguide->answer = $req->has('answer') ? $req->answer : $privateguide->answer;
                $privateguide->status = $req->has('status') ? $req->status : $privateguide->status;
                $privateguide->save();

                $result = $this->generate_response($privateguide,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivateGuide  $privateguide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'privateguide_destroy',
            'params' => json_encode(array("id" => $id)),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $privateguide = PrivateGuide::where('status','!=','deleted')->find($id);
        
        if(!$privateguide){
            $result = $this->generate_response($privateguide, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $privateguide->status = 'deleted';
            $privateguide->save();

            $result = $this->generate_response($privateguide,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
