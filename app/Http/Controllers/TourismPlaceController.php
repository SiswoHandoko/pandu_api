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
        $tourismplace = TourismPlace::with('city','picture')->get();
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
            'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = new TourismPlace();
            $tourismplace->name = $req->name;
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
        $tourismplace = TourismPlace::find($id);
        $result = $this->generate_response($tourismplace, 200, 'Detail Data.', false);

        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = Province::find($id);
            $tourismplace->name = $req->name;
            $tourismplace->save();
            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Updated.', false);

            return response()->json($result, 200);
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
        $tourismplace = TourismPlace::find($id);
        $tourismplace->status = 'deleted';
        $tourismplace->save();
        $result = $this->generate_response($tourismplace, 200, 'Data Has Been Deleted.', false);

        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function city_by_tourismplace($id)
    {
        $city = City::where('tourismplace_id',$id)->get();
        $result = $this->generate_response($city, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
