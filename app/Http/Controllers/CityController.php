<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\City;
use App\Model\Province;
use App\Model\TourismPlace;

class CityController extends Controller
{
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
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $city = City::where('status','!=','deleted')
            ->where('name', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($city,200,'All Data.',false);

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
            $city = new Province();
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
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $tourismplace = TourismPlace::with('city.province', 'picture', 'event')
            ->where('city_id', $id)
            ->where('status', '!=', 'deleted')
            ->where('name', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($tourismplace, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
