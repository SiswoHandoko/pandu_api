<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Category;
use Illuminate\Support\Facades\Mail;

class CategoryController extends Controller
{
    private $fields_categories = array(
        'id',
        'name',
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
        $this->check_account($req);

        $param_insert = array(
            'name' => 'category_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $category = new Category;
        $category = $category->where('status', '!=', 'deleted');
        
        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $category = $category->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_categories))) {
                foreach ($explode_by as $key => $value) {
                    $category = $category->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($category, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_categories)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $category = $category->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($category, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $category = $category->offset($offset);
            $category = $category->limit($req->input('limit'));
        }

        $category = $category->get();

        $result = $this->generate_response($category, 200, 'All Data.', false);

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
        $this->check_account($req);

        $param_insert = array(
            'name' => 'category_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($category,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $category = new Category();

            $category->name = $req->has('name') ? $req->name : 0;
            $category->status = 'active';
            $category->save();

            $result = $this->generate_response($category, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req, $id)
    {
        $this->check_account($req);

        $param_insert = array(
            'name' => 'category_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $category = Category::with('tourism_place')->where('status','!=','deleted')->find($id);

        if(!$category){
            $result = $this->generate_response($category, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($category, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $this->check_account($req);

        $param_insert = array(
            'name' => 'category_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($category,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $category = Category::find($id);
            if(!$category){
                $result = $this->generate_response($category, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            }else{
                $category->name = $req->has('name') ? $req->name : $category->name;
                $category->status = $req->has('status') ? $req->status : $category->status;
                $category->save();

                $result = $this->generate_response($category,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $this->check_account($req);

        $param_insert = array(
            'name' => 'category_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $category = Category::where('status','!=','deleted')->find($id);
        
        if(!$category){
            $result = $this->generate_response($category, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $category->status = 'deleted';
            $category->save();

            $result = $this->generate_response($category,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
