<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PackageDetail;

class PackageDetailController extends Controller
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
        $packagedetail = PackageDetail::with('package', 'tourismplace')->where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($packagedetail, 200, 'All Data.', false);

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
            'package_id' => 'required|numeric|min:0',
            'tourism_place_id' => 'required|numeric|min:0',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        } else {
            $packagedetail = new PackageDetail();

            $packagedetail->package_id = $req->has('package_id') ? $req->package_id : 0;
            $packagedetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
            $packagedetail->start_time = $req->has('start_time') ? $req->start_time : '00:00';
            $packagedetail->end_time = $req->has('end_time') ? $req->end_time : '00:00';
            $packagedetail->total_price = $req->has('total_price') ? $req->total_price : 0;
            $packagedetail->status = $req->has('status') ? $req->status : 'active';

            $packagedetail->save();

            $result = $this->generate_response($packagedetail, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packagedetail = PackageDetail::with('package', 'tourismplace')->where('status', '!=', 'deleted')->find($id);

        if(!$packagedetail) {
            $result = $this->generate_response($packagedetail, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($packagedetail, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|numeric|min:0',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_price' => 'required|numeric|min:0',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($packagedetail, 400, 'Bad Request.', true);
            
            return response()->json($result, 400);
        }else{
            $packagedetail = PackageDetail::find($id);

            $packagedetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $packagedetail->tourism_place_id;
            $packagedetail->start_time = $req->has('start_time') ? $req->start_time : $packagedetail->start_time;
            $packagedetail->end_time = $req->has('end_time') ? $req->end_time : $packagedetail->end_time;
            $packagedetail->total_price = $req->has('total_price') ? $req->total_price : $packagedetail->total_price;
            $packagedetail->status = $req->has('status') ? $req->status : $packagedetail->status;

            $packagedetail->save();

            $result = $this->generate_response($packagedetail, 200, 'Data Has Been Updated.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageDetail  $packagedetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packagedetail = PackageDetail::find($id);

        if(!$packagedetail) {
            $result = $this->generate_response($packagedetail, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $packagedetail->status = 'deleted';
        
            $packagedetail->save();
            
            $result = $this->generate_response($packagedetail, 200, 'Data Has Been Deleted.', false);
            
            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function packagedetail_by_package($id)
    {
        $packagedetail = PackageDetail::where('package_id', $id)->where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($packagedetail, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
