<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PlanDetail;

class PlanDetailController extends Controller
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
        $plandetail = PlanDetail::with('plan', 'tourismplace')->where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

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
            'plan_id' => 'required|numeric',
            'tourism_place_id' => 'required|numeric',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_price' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($plandetail,400,'Bad Request.',true);

            return response()->json($result, 400);
        } else {
            $plandetail = new PlanDetail();

            $plandetail->plan_id = $req->has('plan_id') ? $req->plan_id : 0;
            $plandetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
            $plandetail->start_time = $req->has('start_time') ? $req->start_time : '00:00';
            $plandetail->end_time = $req->has('end_time') ? $req->end_time : '00:00';
            $plandetail->total_price = $req->has('total_price') ? $req->total_price : 0;
            $plandetail->status = 'active';

            $plandetail->save();

            $result = $this->generate_response($plandetail, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanDetail  $plandetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plandetail = PlanDetail::with('plan', 'tourismplace')->where('status', '!=', 'deleted')->find($id);

        if (!$plandetail) {
            $plandetail = new stdClass();
        }

        $result = $this->generate_response($plandetail, 200, 'Detail Data.', false);

        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanDetail  $plandetail
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|numeric',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_price' => 'required|numeric'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);
            
            return response()->json($result, 400);
        }else{
            $plandetail = PlanDetail::find($id);

            $plandetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $plandetail->tourism_place_id;
            $plandetail->start_time = $req->has('start_time') ? $req->start_time : $plandetail->start_time;
            $plandetail->end_time = $req->has('end_time') ? $req->end_time : $plandetail->end_time;
            $plandetail->total_price = $req->has('total_price') ? $req->total_price : 0;

            $plandetail->save();

            $result = $this->generate_response($plandetail, 200, 'Data Has Been Updated.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanDetail  $plandetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plandetail = PlanDetail::find($id);

        $plandetail->status = 'deleted';
        
        $plandetail->save();
        
        $result = $this->generate_response($plandetail, 200, 'Data Has Been Deleted.', false);
        
        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function plandetail_by_plan($id)
    {
        $plandetail = PlanDetail::where('plan_id', $id)->where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
