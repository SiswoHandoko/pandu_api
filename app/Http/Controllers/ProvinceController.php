<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Province;
use App\Model\City;
class ProvinceController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
      $province = Province::get();
      return response()->json($province, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      if(!$req) {
        return response()->json([
          'message' => 'Bad Request'
        ], 400);
      }else{
        $province = new Province();
        $province->province_name = $req->province_name;
        $province->save();
        return response()->json($province, 200);
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
      $province = Province::find($id);
      return response()->json($province, 200);
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
      if (!$req){
        return response()->json([ 'message' => 'Bad Request' ], 400);
      }elseif(!$id) {
        return response()->json([ 'message' => 'Not found' ] ,404);
      }else{
        $province = Province::find($id);
        $province->province_name = $req->province_name;
        $province->save();
        return response()->json($province, 200);
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
      $province = Province::find($id);
      $province->status = 'deleted';
      $province->save();
      return response()->json($province, 200);
    }
}
