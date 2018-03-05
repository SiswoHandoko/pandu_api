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
        $this->middleware('auth');
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $package = new Package;
        $package = $package->with('packagedetail.tourismplace.city');
        $package = $package->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $infopayment = $infopayment->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where_packages($explode_by))) {
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

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $package = $package->offset($offset);
            $package = $package->limit($limit);
        }

        $package = $package->get();

        $result = $this->generate_response($package, 200, 'All Data.', false);

        return response()->json($result, 200);
    }

    private function check_where_packages($where_by)
    {
        foreach ($where_by as $key => $value) {
            if (!in_array($value, $this->fields_packages)) {
                return false;
            }
        }

        return true;
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
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
            'image_url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        } else {
            $package = new Package();

            $package->name = $req->has('name') ? $req->name : '';
            $package->description = $req->has('description') ? $req->description : '';
            $package->days = $req->has('days') ? $req->days : '';
            $package->image_url = $value ? $this->uploadFile($this->public_path(). "/images/packages/", $value) : 'default_img.png';
            $package->start_date = $req->has('start_date') ? $req->start_date : '000-00-00';
            $package->end_date = $req->has('end_date') ? $req->end_date : '000-00-00';
            $package->status = $req->has('status') ? $req->status : 'active';

            $package->save();

            $result = $this->generate_response($package, 200, 'Data Has Been Saved.', false);

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
        $package = Package::with('packagedetail')->where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($package, 200, 'Detail Data.', false);

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
        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
            'image_url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $package = Package::where('status', '!=', 'deleted')->find($id);

            if (!$package) {
                $result = $this->generate_response($package, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $package->name = $req->has('name') ? $req->name : $package->name;
                $package->description = $req->has('description') ? $req->description : $package->description;
                $package->days = $req->has('days') ? $req->days : $package->days;
                $package->image_url = $req->has('image_url') ? $this->uploadFile($this->public_path(). "/images/packages/", $req->image_url, $package->image_url) : $package->image_url;
                $package->start_date = $req->has('start_date') ? $req->start_date : $package->start_date;
                $package->end_date = $req->has('end_date') ? $req->end_date : $package->end_date;
                $package->status = $req->has('status') ? $req->status : $package->status;

                $package->save();

                $result = $this->generate_response($package, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
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
        $package = Package::where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $package->status = 'deleted';

            $package->save();

            $result = $this->generate_response($package,200,'Data Has Been Deleted.',false);

            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function packagedetail_by_packages(Request $req, $id)
    {
        $packagedetail = new PackageDetail;
        $packagedetail = $packagedetail->where('package_id', $id);
        $packagedetail = $packagedetail->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $infopayment = $infopayment->where('start_time', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where_packagedetails($explode_by))) {
                foreach ($explode_by as $key => $value) {
                    $packagedetail = $packagedetail->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

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

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $packagedetail = $packagedetail->offset($offset);
            $packagedetail = $packagedetail->limit($limit);
        }

        $packagedetail = $packagedetail->get();

        $result = $this->generate_response($packagedetail, 200, 'All Data.', false);

        return response()->json($result, 200);
    }

    private function check_where_packagedetails($where_by)
    {
        foreach ($where_by as $key => $value) {
            if (!in_array($value, $this->fields_packagedetails)) {
                return false;
            }
        }

        return true;
    }
}
