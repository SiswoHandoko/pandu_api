<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Plan;
use App\Model\PlanDetail;
use App\Model\Package;
use App\Model\PackageDetail;

class PlanController extends Controller
{
    private $fields_plans = array(
        'id',
        'user_id',
        'guide_id',
        'total_adult',
        'total_child',
        'total_infant',
        'total_tourist',
        'days',
        'start_date',
        'end_date',
        'total_price',
        'receipt',
        'type',
        'status'
    );

    private $fields_plandetails = array(
        'id',
        'plan_id',
        'tourism_place_id',
        'start_time',
        'end_time',
        'day',
        'total_price_adult',
        'total_price_child',
        'total_price_infant',
        'total_price_tourist',
        'no_ticket',
        'status'
    );

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
        $plan = new Plan;
        $plan = $plan->with('user', 'guide', 'plandetail');
        $plan = $plan->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $plan = $plan->where('start_date', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_plans))) {
                foreach ($explode_by as $key => $value) {
                    $plan = $plan->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($plan, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_plans)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $plan = $plan->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($plan, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $plan = $plan->offset($offset);
            $plan = $plan->limit($req->input('limit'));
        }

        $plan = $plan->get();

        $plan = collect($plan)->toArray();

        foreach ($plan as $key => $value) {
            $plan[$key] = $this->validate_relation($plan[$key]);
        }

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
        if ($req->has('package_id')) {
            $validator = Validator::make($req->all(), [
                'user_id' => 'required|numeric|min:0',
                'total_adult' => 'required|numeric|min:0',
                'total_child' => 'required|numeric|min:0',
                'total_infant' => 'required|numeric|min:0',
                'total_tourist' => 'required|numeric|min:0',
                'package_id' => 'required'
            ]);
        } else {
            $validator = Validator::make($req->all(), [
                'user_id' => 'required|numeric|min:0',
                'total_adult' => 'required|numeric|min:0',
                'total_child' => 'required|numeric|min:0',
                'total_infant' => 'required|numeric|min:0',
                'total_tourist' => 'required|numeric|min:0',
                'days' => 'required|numeric|min:0',
                'start_date' => 'required|date_format:"Y-m-d"',
                'end_date' => 'required|date_format:"Y-m-d"',
                'total_price' => 'required|numeric|min:0',
                'type' => 'required'
            ]);
        }

        if ($validator->fails()) {
            $result = $this->generate_response($plan,400,'Bad Request.',true);

            return response()->json($result, 400);
        } else {
            $plan = new Plan();

            if ($req->has('package_id')) {
                $package_id = $req->package_id;

                $package = Package::where('status', '!=', 'deleted')->find($package_id);
                $packagedetail = PackageDetail::with('package', 'tourismplace')->where('status', '!=', 'deleted')->where('package_id', $package_id)->get();

                $package = collect($package)->toArray();
                $packagedetail = collect($packagedetail)->toArray();

                $total_adult = $req->has('total_adult') ? $req->total_adult : 0;
                $total_child = $req->has('total_child') ? $req->total_child : 0;
                $total_infant = $req->has('total_infant') ? $req->total_infant : 0;
                $total_tourist = $req->has('total_tourist') ? $req->total_tourist : 0;
                $total_price = 0;

                foreach ($packagedetail as $key => $value) {
                    $total_price += (($total_adult * $value['tourismplace']['adult_price']) + ($total_child * $value['tourismplace']['child_price']) + ($total_infant * $value['tourismplace']['infant_price']) + ($total_tourist * $value['tourismplace']['tourist_price']));
                }

                $insert_plan = array(
                    'user_id' => $req->user_id,
                    'guide_id' => $req->has('guide_id') ? $req->guide_id : 0,
                    'total_adult' => $req->has('total_adult') ? $req->total_adult : 0,
                    'total_child' => $req->has('total_child') ? $req->total_child : 0,
                    'total_infant' => $req->has('total_infant') ? $req->total_infant : 0,
                    'total_tourist' => $req->has('total_tourist') ? $req->total_tourist : 0,
                    'total_price' => $total_price,
                    'type' => 'package',
                    'days' => $package['days'],
                    'start_date' => $package['start_date'],
                    'end_date' => $package['end_date']
                );

                $plan_id = $plan->insertGetId($insert_plan);

                if ($plan_id)  {
                    $insert_plandetail = array();
                    
                    
                    foreach ($packagedetail as $key => $value) {
                        $insert_plandetail[] = array(
                            'plan_id' => $plan_id,
                            'tourism_place_id' => $value['tourismplace']['id'],
                            'start_time' => $value['start_time'],
                            'end_time' => $value['end_time'],
                            'day' => $value['day'],
                            'adult_price' => $value['tourismplace']['adult_price'],
                            'child_price' => $value['tourismplace']['child_price'],
                            'infant_price' => $value['tourismplace']['infant_price'],
                            'tourist_price' => $value['tourismplace']['tourist_price'],
                            'no_ticket' => $req->has('no_ticket') ? $req->no_ticket : '',
                            'status' => $req->has('status') ? $req->status : 'active'
                        );
                    }

                    $plandetail = new PlanDetail();

                    $plandetail->insert($insert_plandetail);
                    
                    $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($plan_id);

                    if ($plan) {
                        $plan = $this->validate_relation($plan);
                        $result = $this->generate_response($plan, 200, 'Detail Data.', false);

                        return response()->json($result, 200);
                    } else {
                        $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

                        return response()->json($result, 404);
                    }
                }
            } else {
                $plan->user_id = $req->has('user_id') ? $req->user_id : 0;
                $plan->guide_id = $req->has('guide_id') ? $req->guide_id : 0;
                $plan->total_adult = $req->has('total_adult') ? $req->total_adult : 0;
                $plan->total_child = $req->has('total_child') ? $req->total_child : 0;
                $plan->total_infant = $req->has('total_infant') ? $req->total_infant : 0;
                $plan->total_tourist = $req->has('total_tourist') ? $req->total_tourist : 0;
                $plan->days = $req->has('days') ? $req->days : 0;
                $plan->start_date = $req->has('start_date') ? $req->start_date : '000-00-00';
                $plan->end_date = $req->has('end_date') ? $req->end_date : '000-00-00';
                $plan->total_price = $req->has('total_price') ? $req->total_price : 0;
                $plan->receipt = $req->has('receipt') ? $this->uploadFile($this->public_path(). "/images/plans/", $req->receipt) : '';
                $plan->type = $req->has('type') ? $req->type : 'single';
                $plan->status = $req->has('status') ? $req->status : 'active';

                $plan->save();

                $result = $this->generate_response($plan, 200, 'Data Has Been Saved.', false);

                return response()->json($result, 200);
            }
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

        if ($plan) {
            $plan = $this->validate_relation($plan);
            $result = $this->generate_response($plan, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        } else {
            $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
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
            'days' => 'required|numeric|min:0',
            'start_date' => 'required|date_format:"Y-m-d"',
            'end_date' => 'required|date_format:"Y-m-d"',
            'total_price' => 'required|numeric|min:0',
            'type' => 'required',
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
                $plan->days = $req->has('days') ? $req->days : $plan->days;
                $plan->start_date = $req->has('start_date') ? $req->start_date : $plan->start_date;
                $plan->end_date = $req->has('end_date') ? $req->end_date : $plan->end_date;
                $plan->total_price = $req->has('total_price') ? $req->total_price : $plan->total_price;
                $plan->receipt = $req->has('receipt') ? $this->uploadFile($this->public_path(). "/images/plans/", $req->receipt, $plan->receipt) : $plan->receipt;
                $plan->status = $req->has('status') ? $req->status : $plan->status;
                $plan->type = $req->has('type') ? $req->type : $plan->type;

                $plan->save();

                $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($id);
                $plan = $this->validate_relation($plan);

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
        $plandetail = new PlanDetail;
        $plandetail = $plandetail->with('plan', 'tourismplace');
        $plandetail = $plandetail->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $plandetail = $plandetail->where('start_time', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_plandetails))) {
                foreach ($explode_by as $key => $value) {
                    $plandetail = $plandetail->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_plandetails)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $plandetail = $plandetail->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $plandetail = $plandetail->offset($offset);
            $plandetail = $plandetail->limit($req->input('limit'));
        }

        $plandetail = $plandetail->get();

        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

        return response()->json($result, 200);
    }

    private function check_where($where_by, $where_fields)
    {
        foreach ($where_by as $key => $value) {
            if (!in_array($value, $where_fields)) {
                return false;
            }
        }

        return true;
    }

    private function validate_relation($result)
    {
        $result = collect($result)->toArray();

        if (!$result['user']) {
            $result['user'] = array();
        }

        if (!$result['guide']) {
            $result['guide'] = array();
        }

        if (!$result['plandetail']) {
            $result['plandetail'] = array();
        }

        return $result;
    }
}
