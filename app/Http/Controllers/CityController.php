<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\City;
use App\Model\TourismPlace;
use App\Model\Package;

class CityController extends Controller
{
    private $fields_cities = array(
        'id',
        'province_id',
        'name',
        'image_url',
        'rate',
        'status'
    );

    private $fields_tourismplaces = array(
        'id',
        'city_id',
        'name',
        'description',
        'adult_price',
        'child_price',
        'infant_price',
        'tourist_price',
        'longitude',
        'latitude',
        'facilities',
        'status'
    );

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
        $city = new City;
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

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $city = $city->offset($offset);
            $city = $city->limit($limit);
        }

        $city = $city->get();

        $result = $this->generate_response($city, 200, 'All Data.', false);

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
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($city,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $city = new City();
            $city->name = $req->has('name') ? $req->name : '';
            $city->status = 'active';
            $city->save();
            $result = $this->generate_response($city,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::where('status','!=','deleted')->find($id);
        if(!$city){
            $result = $this->generate_response($city, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($city, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($city,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $city = City::find($id);
            if(!$city){
                $result = $this->generate_response($city, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $city->name = $req->has('name') ? $req->name : $city->name;
                $city->status = $req->has('status') ? $req->status : $city->status;
                $city->save();
                $result = $this->generate_response($city,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        if(!$city){
            $result = $this->generate_response($city, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $city->status = 'deleted';
            $city->save();
            $result = $this->generate_response($city,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function tourismplace_by_city(Request $req, $id)
    {
        $tourismplace = new TourismPlace;
        $tourismplace = $tourismplace->with('city.province', 'picture', 'event');
        $tourismplace = $tourismplace->where('city_id', $id);
        $tourismplace = $tourismplace->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $tourismplace = $tourismplace->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_tourismplaces))) {
                foreach ($explode_by as $key => $value) {
                    $tourismplace = $tourismplace->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_tourismplaces)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $tourismplace = $tourismplace->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $tourismplace = $tourismplace->offset($offset);
            $tourismplace = $tourismplace->limit($limit);
        }

        $tourismplace = $tourismplace->get();

        $result = $this->generate_response($tourismplace, 200, 'All Data.', false);

        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function package_by_city(Request $req, $id)
    {
        $package = new Package;
        $package = $package->with('packagedetail.tourismplace.city');
        $package = $package->where('status', '!=', 'deleted');
        $package = $package->whereHas('packagedetail.tourismplace.city', function($query) use ($id) {
            $query->where('id' , $id);
        });

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $package = $package->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_packages))) {
                foreach ($explode_by as $key => $value) {
                    $package = $package->where($explode_by[$key], '=', $explode_value[$key]);
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
