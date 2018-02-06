<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\SpecialDeal;
use App\Model\TourismPlace;
use App\Model\Package;

class SpecialDealController extends Controller
{
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
        $specialdeal = SpecialDeal::with('tourismplace','package')->where('status','!=','deleted')->get();
        $result = $this->generate_response($specialdeal,200,'All Data.',false);
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
          'tourism_place_id' => 'required|max:255',
          'package_id' => 'required|max:255',
          'rate' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($specialdeal,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $specialdeal = new SpecialDeal();
            $specialdeal->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : '';
            $specialdeal->package_id = $req->has('package_id') ? $req->package_id : '';
            $specialdeal->rate = $req->has('rate') ? $req->rate : '';
            $specialdeal->status = 'active';
            $specialdeal->save();
            $result = $this->generate_response($specialdeal,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialdeal = SpecialDeal::with('tourismplace','package')->where('status','!=','deleted')->find($id);
        if(!$specialdeal){
            $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($specialdeal, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|max:255',
            'package_id' => 'required|max:255',
            'rate' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($specialdeal,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $specialdeal = SpecialDeal::find($id);
            if(!$specialdeal){
                $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $specialdeal->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $specialdeal->tourism_place_id;
                $specialdeal->package_id = $req->has('package_id') ? $req->package_id : $specialdeal->package_id;
                $specialdeal->rate = $req->has('rate') ? $req->rate : $specialdeal->rate;
                $specialdeal->status = $req->has('status') ? $req->status : $specialdeal->status;
                $specialdeal->save();
                $result = $this->generate_response($specialdeal,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialdeal = SpecialDeal::find($id);
        if(!$specialdeal){
            $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $specialdeal->status = 'deleted';
            $specialdeal->save();
            $result = $this->generate_response($specialdeal,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

}
