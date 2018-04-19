<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Package;
use App\Model\PackageDetail;

class PackageController extends Controller
{
    private $fields_packages = array(
        'id',
        'name',
        'description',
        'days',
        'start_date',
        'end_date',
        'image_url',
        'status',
        'city_id'
    );

    private $fields_packagedetails = array(
        'id',
        'name',
        'description',
        'days',
        'start_date',
        'end_date',
        'image_url',
        'status',
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
            'name' => 'package_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $package = new Package;
        $package = $package->with('packagedetail.tourismplace.city');
        $package = $package->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $package = $package->where('name', 'LIKE', '%'.$search_query.'%');
        }

        /* Deep Filter */
        if($req->input('day')){
            $package = $package->where('days',$req->input('day'));
        }

        if($req->input('city_id')){
            $city_id = $req->input('city_id');
            $package = $package->whereHas('packagedetail.tourismplace.city', function($query) use ($city_id) {
                            $query->where('id' , $city_id);
                        });
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_packages))) {
                foreach ($explode_by as $key => $value) {
                    if($value=='city_id'){
                        $package = $package->whereHas('packagedetail.tourismplace.city', function($query) use ($explode_value, $key) {
                            $query->where('id' , $explode_value[$key]);
                        });
                    } else {
                        $package = $package->where($explode_by[$key], '=', $explode_value[$key]);
                    }
                }
            } else {
                $result = $this->generate_response($package, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);
                
                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_packages)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $package = $package->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($package, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $package = $package->offset($offset);
            $package = $package->limit($req->input('limit'));
        }

        $package = $package->get();

        $result = $this->generate_response($package, 200, 'All Data.', false);

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
            'name' => 'package_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
            // 'image_url' => 'max:2048',
            // 'start_date' => 'required',
            // 'end_date' => 'required'
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        } else {
            $package = new Package();

            $package->name = $req->has('name') ? $req->name : '';
            $package->description = $req->has('description') ? $req->description : '';
            $package->days = $req->has('days') ? $req->days : '';
            $package->image_url = $req->has('image_url') ? env('BACKEND_URL').'public/images/packages/'.$this->uploadFile($this->public_path(). "/images/packages/", $req->image_url) : env('BACKEND_URL').'public/images/packages/default_img.png';
            // $package->start_date = $req->has('start_date') ? $req->start_date : '000-00-00';
            // $package->end_date = $req->has('end_date') ? $req->end_date : '000-00-00';
            $package->status = $req->has('status') ? $req->status : 'active';

            $package->save();

            $result = $this->generate_response($package, 200, 'Data Has Been Saved.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'package_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $package = Package::with('packagedetail')->where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($package, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'package_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
            // 'image_url' => 'max:2048',
            // 'start_date' => 'required',
            // 'end_date' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $package = Package::where('status', '!=', 'deleted')->find($id);

            if (!$package) {
                $result = $this->generate_response($package, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            } else {
                $package->name = $req->has('name') ? $req->name : $package->name;
                $package->description = $req->has('description') ? $req->description : $package->description;
                $package->days = $req->has('days') ? $req->days : $package->days;
                $package->image_url = $req->has('image_url') ? env('BACKEND_URL').'public/images/packages/'.$this->uploadFile($this->public_path(). "/images/packages/", $req->image_url, $package->image_url) : $package->image_url;
                // $package->start_date = $req->has('start_date') ? $req->start_date : $package->start_date;
                // $package->end_date = $req->has('end_date') ? $req->end_date : $package->end_date;
                $package->status = $req->has('status') ? $req->status : $package->status;

                $package->save();

                $result = $this->generate_response($package, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

                return Response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'package_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $package = Package::where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $package->status = 'deleted';

            $package->save();

            $result = $this->generate_response($package,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function packagedetail_by_package(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'packagedetail_by_package',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $packagedetail = new PackageDetail;
        $packagedetail = $packagedetail->with('package', 'tourismplace.picture');
        $packagedetail = $packagedetail->where('package_id', $id);
        $packagedetail = $packagedetail->where('status', '!=', 'deleted');
        $packagedetail = $packagedetail->orderBy('day', 'asc');
        $packagedetail = $packagedetail->orderBy('start_time', 'asc');
        
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

        $packagedetail = $this->convert_data($packagedetail);

        $result = $this->generate_response($packagedetail, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    private function convert_data($packagedetail)
    {
        $result = array();

        for ($i=1; $i <= 7; $i++) { 
            $result['day'.$i] = array();    
        }

        foreach ($packagedetail as $key => $value) {
            $day = $value->day;

            $result['day'.$day][] = $value;
        }
        
        return $result;
    }
}
