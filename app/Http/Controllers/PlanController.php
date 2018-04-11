<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Plan;
use App\Model\PlanDetail;
use App\Model\Package;
use App\Model\PackageDetail;
use App\Model\TourismPlace;
use Illuminate\Support\Facades\Mail;

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
        $param_insert = array(
            'name' => 'plan_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

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

                $this->update_access_log($access_log_id, $result);
                
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

                $this->update_access_log($access_log_id, $result);

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

        // $plan = collect($plan)->toArray();

        // foreach ($plan as $key => $value) {
        //     $plan[$key] = $this->validate_relation($plan[$key]);
        // }

        $result = $this->generate_response($plan, 200, 'All Data.', false);

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
            'name' => 'plan_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        if ($req->has('package_id')) {
            $validator = Validator::make($req->all(), [
                'user_id' => 'required|numeric|min:0',
                'total_adult' => 'required|numeric|min:0',
                'total_child' => 'required|numeric|min:0',
                'total_infant' => 'required|numeric|min:0',
                'total_tourist' => 'required|numeric|min:0',
                'start_date' => 'required|date_format:"Y-m-d"',
                'end_date' => 'required|date_format:"Y-m-d"',
                'background' => 'max:20480',
                'package_id' => 'required'
            ]);
        } else if ($req->has('tourism_place_id')) {
            $validator = Validator::make($req->all(), [
                'user_id' => 'required|numeric|min:0',
                'total_adult' => 'required|numeric|min:0',
                'total_child' => 'required|numeric|min:0',
                'total_infant' => 'required|numeric|min:0',
                'total_tourist' => 'required|numeric|min:0',
                'start_date' => 'required|date_format:"Y-m-d"',
                'end_date' => 'required|date_format:"Y-m-d"',
                'background' => 'max:20480',
                'tourism_place_id' => 'required|numeric|min:0',
                // 'start_time' => 'required|date_format:"H:i"',
                // 'end_time' => 'required|date_format:"H:i"'
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
                'background' => 'max:20480',
                'type' => 'required'
            ]);
        }

        if ($validator->fails()) {
            $result = $this->generate_response($plan,400,'Bad Request.',true);
            
            $this->update_access_log($access_log_id, $result);

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
                    // 'name' => $req->has('name') ? $req->name : '',
                    // 'background' => $req->has('background') ? env('BACKEND_URL').'public/images/plans/background/'.$this->uploadFile($this->public_path(). "/images/plans/background/", $req->background) : '',
                    'description' => $package['description'],
                    'name' => $package['name'].' - Custom',
                    'background' => $package['image_url'],
                    'total_adult' => $req->has('total_adult') ? $req->total_adult : 0,
                    'total_child' => $req->has('total_child') ? $req->total_child : 0,
                    'total_infant' => $req->has('total_infant') ? $req->total_infant : 0,
                    'total_tourist' => $req->has('total_tourist') ? $req->total_tourist : 0,
                    'total_price' => $total_price,
                    'receipt' => $req->has('receipt') ? env('BACKEND_URL').'public/images/plans/'.$this->uploadFile($this->public_path(). "/images/plans/", $req->receipt) : '',
                    'type' => 'package',
                    'days' => $package['days'],
                    'start_date' => $req->has('start_date') ? $req->start_date : '000-00-00',
                    'end_date' => $req->has('end_date') ? $req->end_date : '000-00-00',
                    'status' => $req->has('status') ? $req->status : 'active'
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

                        $this->update_access_log($access_log_id, $result);

                        return response()->json($result, 200);
                    } else {
                        $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

                        $this->update_access_log($access_log_id, $result);

                        return response()->json($result, 404);
                    }
                } else {
                    $result = $this->generate_response($plan,400,'Bad Request.',true);
            
                    $this->update_access_log($access_log_id, $result);

                    return response()->json($result, 400);
                }
            } else if ($req->has('tourism_place_id')) {
                $tourismplace = TourismPlace::with('city.province', 'picture', 'event')->where('status', '!=', 'deleted')->find($req->tourism_place_id);

                $total_price = ($req->total_adult * $tourismplace->adult_price) + ($req->total_child * $tourismplace->child_price) + ($req->total_infant * $tourismplace->infant_price) + ($req->total_tourist * $tourismplace->tourist_price);

                $insert_plan = array(
                    'user_id' => $req->user_id,
                    'guide_id' => $req->has('guide_id') ? $req->guide_id : 0,
                    'name' => $req->has('name') ? $req->name : '',
                    'background' => $req->has('background') ? env('BACKEND_URL').'public/images/plans/background/'.$this->uploadFile($this->public_path(). "/images/plans/background/", $req->background) : '',
                    'total_adult' => $req->has('total_adult') ? $req->total_adult : 0,
                    'total_child' => $req->has('total_child') ? $req->total_child : 0,
                    'total_infant' => $req->has('total_infant') ? $req->total_infant : 0,
                    'total_tourist' => $req->has('total_tourist') ? $req->total_tourist : 0,
                    'total_price' => $total_price,
                    'receipt' => $req->has('receipt') ? env('BACKEND_URL').'public/images/plans/'.$this->uploadFile($this->public_path(). "/images/plans/", $req->receipt) : '',
                    'type' => 'single',
                    'days' => 1,
                    'start_date' => $req->has('start_date') ? $req->start_date : '000-00-00',
                    'end_date' => $req->has('end_date') ? $req->end_date : '000-00-00',
                    'description' => $req->has('description') ? $req->description : '',
                    'status' => $req->has('status') ? $req->status : 'active'
                );

                $plan_id = $plan->insertGetId($insert_plan);

                if ($plan_id)  {
                    $insert_plandetail = array(
                        'plan_id' => $plan_id,
                        'tourism_place_id' => $req->tourism_place_id,
                        'start_time' => $req->has('start_time') ? $req->start_time : '00:00:00',
                        'end_time' => $req->has('end_time') ? $req->end_time : '00:00:00',
                        'day' => 1,
                        'adult_price' => $tourismplace->adult_price,
                        'child_price' => $tourismplace->child_price,
                        'infant_price' => $tourismplace->infant_price,
                        'tourist_price' => $tourismplace->tourist_price,
                        'no_ticket' => $req->has('no_ticket') ? $req->no_ticket : '',
                        'status' => $req->has('status') ? $req->status : 'active'
                    );

                    $plandetail = new PlanDetail();

                    $plandetail->insert($insert_plandetail);
                    
                    $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($plan_id);

                    if ($plan) {
                        $plan = $this->validate_relation($plan);
                        $result = $this->generate_response($plan, 200, 'Detail Data.', false);

                        $this->update_access_log($access_log_id, $result);

                        return response()->json($result, 200);
                    } else {
                        $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

                        $this->update_access_log($access_log_id, $result);

                        return response()->json($result, 404);
                    }
                } else {
                    $result = $this->generate_response($plan,400,'Bad Request.',true);
            
                    $this->update_access_log($access_log_id, $result);

                    return response()->json($result, 400);
                }
            } else {
                $plan->user_id = $req->has('user_id') ? $req->user_id : 0;
                $plan->guide_id = $req->has('guide_id') ? $req->guide_id : 0;
                $plan->name = $req->has('name') ? $req->name : '';
                $plan->background = $req->has('background') ? env('BACKEND_URL').'public/images/plans/background/'.$this->uploadFile($this->public_path(). "/images/plans/background/", $req->background) : '';
                $plan->total_adult = $req->has('total_adult') ? $req->total_adult : 0;
                $plan->total_child = $req->has('total_child') ? $req->total_child : 0;
                $plan->total_infant = $req->has('total_infant') ? $req->total_infant : 0;
                $plan->total_tourist = $req->has('total_tourist') ? $req->total_tourist : 0;
                $plan->days = $req->has('days') ? $req->days : 0;
                $plan->start_date = $req->has('start_date') ? $req->start_date : '000-00-00';
                $plan->end_date = $req->has('end_date') ? $req->end_date : '000-00-00';
                $plan->total_price = $req->has('total_price') ? $req->total_price : 0;
                $plan->receipt = $req->has('receipt') ? env('BACKEND_URL').'public/images/plans/'.$this->uploadFile($this->public_path(). "/images/plans/", $req->receipt) : '';
                $plan->type = $req->has('type') ? $req->type : 'single';
                $plan->status = $req->has('status') ? $req->status : 'active';

                $plan->save();

                $result = $this->generate_response($plan, 200, 'Data Has Been Saved.', false);

                $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'plan_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($id);

        if ($plan) {
            // $plan = $this->validate_relation($plan);
            $result = $this->generate_response($plan, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        } else {
            $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'plan_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );
        
        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'total_adult' => 'required|numeric|min:0',
            'total_child' => 'required|numeric|min:0',
            'total_infant' => 'required|numeric|min:0',
            'total_tourist' => 'required|numeric|min:0',
            'days' => 'required|numeric|min:0',
            'start_date' => 'required|date_format:"Y-m-d"',
            'end_date' => 'required|date_format:"Y-m-d"',
            'total_price' => 'numeric|min:0',
            'background' => 'max:20480',
            'receipt' => 'max:20480',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plan, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $plan = Plan::where('status', '!=', 'deleted')->find($id);

            if (!$plan) {
                $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

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
                $plan->receipt = $req->has('receipt') ? env('BACKEND_URL').'public/images/plans/'.$this->uploadFile($this->public_path(). "/images/plans/", $req->receipt, $plan->receipt) : $plan->receipt;
                $plan->status = $req->has('status') ? $req->status : $plan->status;
                $plan->description = $req->has('description') ? $req->description : $plan->description;
                $plan->type = $req->has('type') ? $req->type : $plan->type;

                $plan->save();

                if(strtolower($plan->status) == 'draft'){
                    /* Email Process */
                    $data['to']         = $plan->user->email;
                    $data['alias']      = 'Admin Pandu';
                    $data['subject']    = 'DRAFT PLAN';
                    $data['content']    = "Your Current Plan status is <strong>Draft</strong> immediately finish and submit your plan.";
                    $data['name']       = $plan->user->username;
                    $email              = $data;
                    Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                        $send->to($email['to'])->subject($email['subject']);
                        $send->from('admin@pandu.com', $email['alias']);
                    });
                }elseif(strtolower($plan->status) == 'order'){
                    /* Email Process */
                    $data['to']         = $plan->user->email;
                    $data['alias']      = 'Admin Pandu';
                    $data['subject']    = 'ORDER PLAN';
                    $data['content']    = "Your Current Plan status is <strong>Order</strong> immediately complete and confirm payment.";
                    $data['name']       = $plan->user->username;

                    $email              = $data;
                    Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                        $send->to($email['to'])->subject($email['subject']);
                        $send->from('admin@pandu.com', $email['alias']);
                    });
                }elseif(strtolower($plan->status) == 'issued'){
                    /* Email Process */
                    $data['to']         = $plan->user->email;
                    $data['alias']      = 'Admin Pandu';
                    $data['subject']    = 'ISSUED PLAN';
                    $data['content']    = "Your Current Plan status is <strong>Issued</strong> Please wait for confirmation and more info from Pandu Admin.";
                    $data['name']       = $plan->user->username;

                    $email              = $data;
                    Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                        $send->to($email['to'])->subject($email['subject']);
                        $send->from('admin@pandu.com', $email['alias']);
                    });
                }elseif(strtolower($plan->status) == 'ticketed'){
                    /* Email Process */
                    $data['to']         = $plan->user->email;
                    $data['alias']      = 'Admin Pandu';
                    $data['subject']    = 'TICKETED PLAN';
                    $data['content']    = "Your Current Plan status is <strong>Ticketed</strong> Please Check details of your order and itinerary on the application.";
                    $data['name']       = $plan->user->username;

                    $email              = $data;
                    Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                        $send->to($email['to'])->subject($email['subject']);
                        $send->from('admin@pandu.com', $email['alias']);
                    });
                }
                $plan = Plan::with('user', 'guide', 'plandetail')->where('status', '!=', 'deleted')->find($id);
                // $plan = $this->validate_relation($plan);

                $result = $this->generate_response($plan, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'plan_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plan = Plan::where('status', '!=', 'deleted')->find($id);

        if (!$plan) {
            $result = $this->generate_response($plan, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $plan->status = 'deleted';

            $plan->save();

            $result = $this->generate_response($plan, 200, 'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy_plandetail_by_plan(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'destroy_plandetail_by_plan',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plandetail = new PlanDetail;
        $plandetail = $plandetail->where('status', '!=', 'deleted');
        $plandetail = $plandetail->where('plan_id', '=', $id);

        if ($req->has('day')) {
            $plandetail = $plandetail->where('day', '=', $req->day);
        }

        if ($req->has('plandetail_id')) {
            $plandetail = $plandetail->where('id', '=', $req->plandetail_id);
        }

        if (!$plandetail) {
            $result = $this->generate_response($plandetail, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $plandetail = $plandetail->update(['status' => 'deleted']);

            $plandetail = new PlanDetail;
            $plandetail = $plandetail->with('plan', 'tourismplace');
            $plandetail = $plandetail->where('status', '!=', 'deleted');
            $plandetail = $plandetail->where('plan_id', '=', $id);
            $plandetail = $plandetail->orderBy('day', 'asc');
            $plandetail = $plandetail->orderBy('start_time', 'asc');

            $plandetail = $plandetail->get();

            $plandetail = $this->convert_data($plandetail);

            $this->update_day_plan($id);

            $result = $this->generate_response($plandetail, 200, 'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    private function update_day_plan($plan_id)
    {
        $max_day = PlanDetail::with('plan', 'tourismplace')->where('status', '!=', 'deleted')->where('plan_id', '=', $plan_id)->orderBy('day', 'desc')->get();
        $max_day = collect($max_day)->toArray();

        $plan = new Plan();
        $plan = Plan::where('status', '!=', 'deleted')->find($plan_id);

        if ($plan) {
            if ($max_day) {
                $plan->days = $max_day[0]['day'];
            } else {
                $plan->days = 0;

                // $plan = Plan::where('status', '!=', 'deleted')->find($plan_id);

                // $plan->status = 'deleted';

                // $plan->save();
            }

            $plan->save();
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function plandetail_by_plan(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'plandetail_by_plan',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plandetail = new PlanDetail;
        $plandetail = $plandetail->with('plan', 'tourismplace');
        $plandetail = $plandetail->where('status', '!=', 'deleted');
        $plandetail = $plandetail->where('plan_id', '=', $id);
        $plandetail = $plandetail->orderBy('day', 'asc');
        $plandetail = $plandetail->orderBy('start_time', 'asc');

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

        $plandetail = $this->convert_data($plandetail);
        
        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */

    public function update_plandetail_by_plan(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'update_plandetail_by_plan',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $req_arr = collect($req)->toArray();

        foreach ($req_arr as $key_req => $value_req) {
            if ($value_req) {
                foreach ($value_req as $key_pd => $value_pd) {
                    $plandetail = new PlanDetail;
                    $plandetail = $plandetail->where('id', '=', $value_pd['plandetail_id']);
                    $plandetail = $plandetail->update([
                        'tourism_place_id' => $value_pd['tourism_place_id'],
                        'start_time' => $value_pd['start_time'],
                        'end_time' => $value_pd['end_time'],
                        'day' => $value_pd['day'],
                    ]);
                }
            }
        }

        $plandetail = new PlanDetail;
        $plandetail = $plandetail->with('plan', 'tourismplace');
        $plandetail = $plandetail->where('status', '!=', 'deleted');
        $plandetail = $plandetail->where('plan_id', '=', $id);
        $plandetail = $plandetail->orderBy('day', 'asc');
        $plandetail = $plandetail->orderBy('start_time', 'asc');
        
        $plandetail = $plandetail->get();

        $plandetail = $this->convert_data($plandetail);
        
        $result = $this->generate_response($plandetail, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    private function convert_data($plandetail)
    {
        $result = array();
        $index = 0;
        $day = 0;

        foreach ($plandetail as $key => $value) {
            if ($value->day != $day) {
                $index++;
                $day = $value->day;

                $result['day'.$index][] = $value;
            } else {
                $result['day'.$index][] = $value;
            }
        }

        $index++;

        for ($i=$index; $i <= 7; $i++) { 
            $result['day'.$i] = array();
        }
        
        return $result;
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
