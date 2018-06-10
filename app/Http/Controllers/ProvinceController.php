<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Province;
use App\Model\City;

class ProvinceController extends Controller
{
    private $fields_provinces = array(
        'id',
        'name',
        'status'
    );

    private $fields_cities = array(
        'id',
        'province_id',
        'name',
        'image_url',
        'rate',
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
        //     'name' => 'province_index',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $province = new Province;
        $province = $province->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $province = $province->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_provinces))) {
                foreach ($explode_by as $key => $value) {
                    $province = $province->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($province, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_provinces)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $province = $province->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($province, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $province = $province->offset($offset);
            $province = $province->limit($req->input('limit'));
        }

        $province = $province->get();

        $result = $this->generate_response($province, 200, 'All Data.', false);

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
            'name' => 'province_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($province,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $province = new Province();
            $province->name = $req->has('name') ? $req->name : '';
            $province->status = $req->has('status') ? $req->status : 'active';
            $province->save();

            $result = $this->generate_response($province,200,'Data Has Been Saved.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $param_insert = array(
        //     'name' => 'province_show',
        //     'params' => '',
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $province = Province::where('status','!=','deleted')->find($id);
        if(!$province){
            $result = $this->generate_response($province, 404, 'Data Not Found.', true);

            // $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($province, 200, 'Detail Data.', false);

            // $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        $param_insert = array(
            'name' => 'province_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($province,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $province = Province::find($id);
            if(!$province){
                $result = $this->generate_response($province, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            }else{
                $province->name = $req->has('name') ? $req->name : $province->name;
                $province->status = $req->has('status') ? $req->status : $province->status;
                $province->save();
                $result = $this->generate_response($province,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'province_destroy',
            'params' => json_encode(array("id" => $id)),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $province = Province::where('status', '!=', 'deleted')->find($id);

        if(!$province){
            $result = $this->generate_response($province, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $province = Province::find($id);
            $province->status = 'deleted';
            $province->save();

            $result = $this->generate_response($province,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function city_by_province(Request $req, $id)
    {
        // $param_insert = array(
        //     'name' => 'city_by_province',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $city = new City;
        $city = $city->with('province');
        $city = $city->where('province_id', $id);
        $city = $city->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $city = $city->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_cities))) {
                foreach ($explode_by as $key => $value) {
                    $city = $city->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($city, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_cities)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $city = $city->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($city, 400, 'Bad Request.', true);

                // $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $city = $city->offset($offset);
            $city = $city->limit($req->input('limit'));
        }

        $city = $city->get();

        $result = $this->generate_response($city, 200, 'All Data.', false);

        // $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }
}
