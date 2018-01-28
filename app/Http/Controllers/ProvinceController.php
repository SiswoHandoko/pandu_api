<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Province;
use App\Model\City;
class ProvinceController extends Controller
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
        $province = Province::where('status','!=','deleted')->get();
        $result = $this->generate_response($province,200,'All Data.',false);
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
            $result = $this->generate_response($province,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $province = new Province();
            $province->name = $req->has('name') ? $req->name : '';
            $province->status = 'active';
            $province->save();
            $result = $this->generate_response($province,200,'Data Has Been Saved.',false);

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
        $province = Province::where('status','!=','deleted')->find($id);
        if(!$province){
            $result = $this->generate_response($province, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($province, 200, 'Detail Data.', false);
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
        /* Validation */
        $validator = Validator::make($req->all(), [
          'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($province,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $province = Province::find($id);
            if(!$province){
                $result = $this->generate_response($province, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $province->name = $req->has('name') ? $req->name : $province->name;
                $province->status = $req->has('status') ? $req->status : $province->status;
                $province->save();
                $result = $this->generate_response($province,200,'Data Has Been Updated.',false);
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
        if(!$province){
            $result = $this->generate_response($province, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $province = Province::find($id);
            $province->status = 'deleted';
            $province->save();
            $result = $this->generate_response($province,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function city_by_province($id)
    {
        $city = City::where('province_id',$id)->get();
        $result = $this->generate_response($city,200,'All Data.',false);
        return response()->json($result, 200);
    }
}
