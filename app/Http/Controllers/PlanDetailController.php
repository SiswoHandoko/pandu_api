<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\PlanDetail;
use App\Model\TourismPlace;

class PlanDetailController extends Controller
{
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
        $param_insert = array(
            'name' => 'plandetail_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plandetail = new PlanDetail;
        $plandetail = $plandetail->with('plan', 'tourismplace.picture');
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

                $this->update_access_log($access_log_id, $result);
                
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

                $this->update_access_log($access_log_id, $result);

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

        $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'plandetail_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'plan_id' => 'required|numeric|min:0',
            'tourism_place_id' => 'required|numeric|min:0',
            // 'start_time' => 'required|date_format:"H:i:s"',
            // 'end_time' => 'required|date_format:"H:i:s"',
            'start_time' => 'required',
            'end_time' => 'required',
            'day' => 'required|numeric|min:0'
        ]);
        
        if ($validator->fails()) {
            $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        } else {
            $tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;

            $tourismplace = TourismPlace::with('city.province', 'picture', 'event')->where('status', '!=', 'deleted')->find($tourism_place_id);
            $tourismplace = collect($tourismplace)->toArray();

            if ($tourismplace) {
                $plandetail = new PlanDetail();

                $plandetail->plan_id = $req->has('plan_id') ? $req->plan_id : 0;
                $plandetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
                $plandetail->start_time = $req->has('start_time') ? $req->start_time : '00:00';
                $plandetail->end_time = $req->has('end_time') ? $req->end_time : '00:00';
                $plandetail->day = $req->has('day') ? $req->day : 0;
                $plandetail->adult_price = $tourismplace['adult_price'];
                $plandetail->child_price = $tourismplace['child_price'];
                $plandetail->infant_price = $tourismplace['infant_price'];
                $plandetail->tourist_price = $tourismplace['tourist_price'];
                $plandetail->no_ticket = $req->has('no_ticket') ? $req->no_ticket : '';
                $plandetail->status = $req->has('status') ? $req->status : 'active';

                $plandetail->save();

                $result = $this->generate_response($plandetail, 200, 'Data Has Been Saved.', false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            } else {
                $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
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
        $param_insert = array(
            'name' => 'plandetail_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plandetail = PlanDetail::with('plan', 'tourismplace')->where('status', '!=', 'deleted')->find($id);

        // $max_day = PlanDetail::with('plan', 'tourismplace')->where('status', '!=', 'deleted')->where('plan_id', '=', $plandetail->plan->id)->max('day')->get();
        // $max_day = PlanDetail::raw('MAX(day) as day')->with('plan', 'tourismplace')->where('status', '!=', 'deleted')->where('plan_id', '=', $plandetail->plan->id)->get();

        // print_r(collect($max_day)->toArray());exit;

        if (!$plandetail) {
            $result = $this->generate_response($plandetail, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($plandetail, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
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
        $param_insert = array(
            'name' => 'plandetail_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|numeric|min:0',
            // 'start_time' => 'required|date_format:"H:i:s"',
            // 'end_time' => 'required|date_format:"H:i:s"',
            'start_time' => 'required',
            'end_time' => 'required',
            'day' => 'required|numeric|min:0',
            'adult_price' => 'required|numeric|min:0',
            'child_price' => 'required|numeric|min:0',
            'infant_price' => 'required|numeric|min:0',
            'tourist_price' => 'required|numeric|min:0'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plandetail, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $plandetail = PlanDetail::where('status', '!=', 'deleted')->find($id);

            if (!$plandetail) {
                $result = $this->generate_response($plandetail, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            } else {
                $plandetail->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $plandetail->tourism_place_id;
                $plandetail->start_time = $req->has('start_time') ? $req->start_time : $plandetail->start_time;
                $plandetail->end_time = $req->has('end_time') ? $req->end_time : $plandetail->end_time;
                $plandetail->day = $req->has('day') ? $req->day : $plandetail->day;
                $plandetail->adult_price = $req->has('adult_price') ? $req->adult_price : $plandetail->adult_price;
                $plandetail->child_price = $req->has('child_price') ? $req->child_price : $plandetail->child_price;
                $plandetail->infant_price = $req->has('infant_price') ? $req->infant_price : $plandetail->infant_price;
                $plandetail->tourist_price = $req->has('tourist_price') ? $req->tourist_price : $plandetail->tourist_price;
                $plandetail->no_ticket = $req->has('no_ticket') ? $req->no_ticket : $plandetail->no_ticket;
                $plandetail->status = $req->has('status') ? $req->status : $plandetail->status;

                $plandetail->save();

                $result = $this->generate_response($plandetail, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
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
        $param_insert = array(
            'name' => 'plandetail_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plandetail = PlanDetail::where('status', '!=', 'deleted')->find($id);

        if (!$plandetail) {
            $result = $this->generate_response($plandetail, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $plandetail->status = 'deleted';

            $plandetail->save();

            $result = $this->generate_response($plandetail, 200, 'Data Has Been Deleted.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
