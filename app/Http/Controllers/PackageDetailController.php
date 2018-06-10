<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PackageDetail;

class PackageDetailController extends Controller
{
    private $fields_packagedetails = array(
        'id',
        'package_id',
        'tourism_place_id',
        'start_time',
        'end_time',
        'day',
        'city_id'
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
            'name' => 'packagedetail_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $packagedetail = new PackageDetail;
        $packagedetail = $packagedetail->with('package', 'tourismplace.city');
        $packagedetail = $packagedetail->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $packagedetail = $packagedetail->where('start_time', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_packagedetails))) {
                foreach ($explode_by as $key => $value) {
                    $packagedetail = $packagedetail->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);
                
                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_packagedetails)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $packagedetail = $packagedetail->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $packagedetail = $packagedetail->offset($offset);
            $packagedetail = $packagedetail->limit($req->input('limit'));
        }

        $packagedetail = $packagedetail->get();

        $result = $this->generate_response($packagedetail, 200, 'All Data.', false);

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
            'name' => 'packagedetail_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'package_id' => 'required|numeric|min:0',
            'tourism_place_id' => 'required|numeric|min:0',
            'start_time' => 'required|date_format:"H:i"',
            'end_time' => 'required|date_format:"H:i"',
            // 'total_price' => 'required|numeric|min:0',
            'day' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        } else {
            $packagedetail = new PackageDetail();

            $packagedetail->package_id = $req->has('package_id') ? $req->package_id : 0;
            $packagedetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
            $packagedetail->start_time = $req->has('start_time') ? $req->start_time : '00:00';
            $packagedetail->end_time = $req->has('end_time') ? $req->end_time : '00:00';
            // $packagedetail->total_price = $req->has('total_price') ? $req->total_price : 0;
            $packagedetail->day = $req->has('day') ? $req->day : 0;
            $packagedetail->status = $req->has('status') ? $req->status : 'active';

            $packagedetail->save();

            $result = $this->generate_response($packagedetail, 200, 'Data Has Been Saved.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'packagedetail_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $packagedetail = PackageDetail::with('package', 'tourismplace.city')->where('status', '!=', 'deleted')->find($id);

        if (!$packagedetail) {
            $result = $this->generate_response($packagedetail, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($packagedetail, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'packagedetail_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|numeric|min:0',
            'start_time' => 'required|date_format:"H:i"',
            'end_time' => 'required|date_format:"H:i"',
            // 'total_price' => 'required|numeric|min:0',
            'day' => 'required|numeric|min:0',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $packagedetail = PackageDetail::where('status', '!=', 'deleted')->find($id);

            if (!$packagedetail) {
                $result = $this->generate_response($packagedetail, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            } else {
                $packagedetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $packagedetail->tourism_place_id;
                $packagedetail->start_time = $req->has('start_time') ? $req->start_time : $packagedetail->start_time;
                $packagedetail->end_time = $req->has('end_time') ? $req->end_time : $packagedetail->end_time;
                // $packagedetail->total_price = $req->has('total_price') ? $req->total_price : $packagedetail->total_price;
                $packagedetail->day = $req->has('day') ? $req->day : 0;
                $packagedetail->status = $req->has('status') ? $req->status : $packagedetail->status;

                $packagedetail->save();

                $result = $this->generate_response($packagedetail, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'packagedetail_destroy',
            'params' => json_encode(array("id" => $id)),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $packagedetail = PackageDetail::where('status', '!=', 'deleted')->find($id);

        if (!$packagedetail) {
            $result = $this->generate_response($packagedetail, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $packagedetail->status = 'deleted';

            $packagedetail->save();

            $result = $this->generate_response($packagedetail, 200, 'Data Has Been Deleted.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
