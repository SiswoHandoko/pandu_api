<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\TourismPlace;
use App\Model\City;

class TourismPlaceController extends Controller
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

        $tourismplace = TourismPlace::with('city.province', 'picture', 'event')
            ->where('status', '!=', 'deleted')
            ->where('name', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($tourismplace, 200, 'All Data.', false);

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
            'city_id' => 'required|min:0',
            'name' => 'required|max:255',
            'adult_price' => 'required|min:0',
            'child_price' => 'required|min:0',
            'infant_price' => 'required|min:0',
            'tourist_price' => 'required|min:0',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = new TourismPlace();

            $tourismplace->city_id = $req->has('city_id') ? $req->city_id : 0;
            $tourismplace->name = $req->has('name') ? $req->name : '';
            $tourismplace->description = $req->has('description') ? $req->description : '';
            $tourismplace->adult_price = $req->has('adult_price') ? $req->adult_price : 0;
            $tourismplace->child_price = $req->has('child_price') ? $req->child_price : 0;
            $tourismplace->infant_price = $req->has('infant_price') ? $req->infant_price : 0;
            $tourismplace->tourist_price = $req->has('tourist_price') ? $req->tourist_price : 0;
            $tourismplace->longitude = $req->has('longitude') ? $req->longitude : '';
            $tourismplace->latitude = $req->has('latitude') ? $req->latitude : '';
            $tourismplace->facilities = $req->has('facilities') ? $req->facilities : '';
            $tourismplace->status = 'active';

            $tourismplace->save();

            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourismplace = TourismPlace::with('city.province', 'picture', 'event')->where('status', '!=', 'deleted')->find($id);
        
        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($tourismplace, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'city_id' => 'required|min:0',
            'name' => 'required|max:255',
            'adult_price' => 'required|min:0',
            'child_price' => 'required|min:0',
            'infant_price' => 'required|min:0',
            'tourist_price' => 'required|min:0',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);


        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

            if (!$tourismplace) {
                $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $tourismplace->city_id = $req->has('city_id') ? $req->city_id : $tourismplace->city_id;
                $tourismplace->name = $req->has('name') ? $req->name : $tourismplace->name;
                $tourismplace->description = $req->has('description') ? $req->description : $tourismplace->description;
                $tourismplace->adult_price = $req->has('adult_price') ? $req->adult_price : $tourismplace->adult_price;
                $tourismplace->child_price = $req->has('child_price') ? $req->child_price : $tourismplace->child_price;
                $tourismplace->infant_price = $req->has('infant_price') ? $req->infant_price : $tourismplace->infant_price;
                $tourismplace->tourist_price = $req->has('tourist_price') ? $req->tourist_price : $tourismplace->tourist_price;
                $tourismplace->longitude = $req->has('longitude') ? $req->longitude : $tourismplace->longitude;
                $tourismplace->latitude = $req->has('latitude') ? $req->latitude : $tourismplace->latitude;
                $tourismplace->facilities = $req->has('facilities') ? $req->facilities : $tourismplace->facilities;

                $tourismplace->save();

                $result = $this->generate_response($tourismplace, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $tourismplace->status = 'deleted';
            
            $tourismplace->save();
            
            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Deleted.', false);

            return response()->json($result, 200);
        }
    }
}
