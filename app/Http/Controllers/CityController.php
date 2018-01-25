<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\City;
use App\Model\Province;
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
        $city = City::where('status','!=','deleted')->get();
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
        $city->name = $req->name;
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
        $result = $this->generate_response($city,200,'Detail Data.',false);
        return response()->json($result, 200);
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
            $city->name = $req->name;
            $city->save();
            $result = $this->generate_response($city,200,'Data Has Been Updated.',false);
            return response()->json($result, 200);
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
        $city->status = 'deleted';
        $city->save();
        $result = $this->generate_response($city,200,'Data Has Been Deleted.',false);
        return response()->json($result, 200);
    }

}
