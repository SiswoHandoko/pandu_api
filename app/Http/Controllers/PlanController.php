<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Plan;
use App\Model\PlanDetail;

class PlanController extends Controller
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
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $plan = Plan::with('user', 'guide', 'plandetail')
            ->where('status', '!=', 'deleted')
            ->where('start_date', 'LIKE', '%'.$search_query.'%')
            ->orWhere('end_date', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($plan, 200, 'All Data.', false);

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
            'user_id' => 'required|numeric|min:0',
            'total_adult' => 'required|numeric|min:0',
            'total_child' => 'required|numeric|min:0',
            'total_infant' => 'required|numeric|min:0',
            'total_tourist' => 'required|numeric|min:0',
            'start_date' => 'required|date_format:"Y-m-d"',
            'end_date' => 'required|date_format:"Y-m-d"',
            'total_price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($plan,400,'Bad Request.',true);

            return response()->json($result, 400);
        } else {
            $plan = new Plan();

            $plan->user_id = $req->has('user_id') ? $req->user_id : 0;
            $plan->guide_id = $req->has('guide_id') ? $req->guide_id : 0;
            $plan->total_adult = $req->has('total_adult') ? $req->total_adult : 0;
            $plan->total_child = $req->has('total_child') ? $req->total_child : 0;
            $plan->total_infant = $req->has('total_infant') ? $req->total_infant : 0;
            $plan->total_tourist = $req->has('total_tourist') ? $req->total_tourist : 0;
            $plan->start_date = $req->has('start_date') ? $req->start_date : '000-00-00';
            $plan->end_date = $req->has('end_date') ? $req->end_date : '000-00-00';
            $plan->total_price = $req->has('total_price') ? $req->total_price : 0;
            $plan->status = $req->has('status') ? $req->status : 'active';

            $plan->save();

            $result = $this->generate_response($plan, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($id);

        if (!$plan) {
            $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($plan, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'total_adult' => 'required|numeric|min:0',
            'total_child' => 'required|numeric|min:0',
            'total_infant' => 'required|numeric|min:0',
            'total_tourist' => 'required|numeric|min:0',
            'start_date' => 'required|date_format:"Y-m-d"',
            'end_date' => 'required|date_format:"Y-m-d"',
            'total_price' => 'required|numeric|min:0',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plan, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $plan = Plan::where('status', '!=', 'deleted')->find($id);

            if (!$plan) {
                $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $plan->total_adult = $req->has('total_adult') ? $req->total_adult : $plan->total_adult;
                $plan->total_child = $req->has('total_child') ? $req->total_child : $plan->total_child;
                $plan->total_infant = $req->has('total_infant') ? $req->total_infant : $plan->total_infant;
                $plan->total_tourist = $req->has('total_tourist') ? $req->total_tourist : $plan->total_tourist;
                $plan->start_date = $req->has('start_date') ? $req->start_date : $plan->start_date;
                $plan->end_date = $req->has('end_date') ? $req->end_date : $plan->end_date;
                $plan->total_price = $req->has('total_price') ? $req->total_price : $plan->total_price;
                $plan->status = $req->has('status') ? $req->status : $plan->status;

                $plan->save();

                $result = $this->generate_response($plan, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::where('status', '!=', 'deleted')->find($id);

        if (!$plan) {
            $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $plan->status = 'deleted';

            $plan->save();

            $result = $this->generate_response($plan, 200, 'Data Has Been Deleted.',false);

            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function plandetail_by_plan(Request $req, $id)
    {
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $plandetail = PlanDetail::with('plan', 'tourismplace')
            ->where('plan_id', $id)
            ->where('status', '!=', 'deleted')
            ->where('start_time', 'LIKE', '%'.$search_query.'%')
            ->where('end_time', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
