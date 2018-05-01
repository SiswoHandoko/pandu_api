<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Model\TourismPlace;
use App\Model\Package;
use App\Model\Plan;
use App\Model\PlanDetail;
use App\Model\User;
use App\Model\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CustomController extends Controller
{

     /** SAMPLE CODE IF YOU FILTER DATA BY DATE ON DATABASE */
    //  $result2['query']                    = User::where(DB::raw('date(DATE_ADD(created_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))->toSql();
    //  $result2['all']                      = User::select(DB::raw('date(DATE_ADD(created_at, INTERVAL 7 HOUR)) as new_date'))->get();
    //  $result2['registered_user_this_day'] = User::where(DB::raw('date(DATE_ADD(created_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))->get();

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_status(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'custom_package',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $tables = $this->get_table();
        /* Validation */
        $validator = Validator::make($req->all(), [
          'table' => 'required|max:255|in:'.$tables,
          'field' => 'required|max:255|in:status',
          'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($update,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $modeldir   = "App\Model\ ";
            $modelname  = ucfirst(rtrim($req->table,'s'));
            $model      = trim($modeldir).$modelname;

            $update = $model::find($id);
            if(!$update){
                $result = $this->generate_response($update, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            }else{
                $update->status = $req->has('status') ? $req->status : '';
                $update->save();

                /* If Table is plan */
                if(strtolower($req->table)=='plans'){

                    if(strtolower($req->status) == 'active'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'ACTIVE PLAN';
                        $data['content']    = "Your Current Plan status is <strong>Active</strong> immediately finish and submit your plan.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });

                        /** Insert Into Table Message */
                        $message = new Message();
                        $message->user_id = $update->user->id;
                        $message->title = 'ACTIVE PLAN';
                        $message->description = "Your Current Plan status is Active immediately finish and submit your plan.";
                        $message->status = 'active';
                        $message->created_by = '1';
                        $message->save();

                    }elseif(strtolower($req->status) == 'booking'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'BOOKING PLAN';
                        $data['content']    = "Your Current Plan status is <strong>Booking</strong> immediately complete and confirm payment.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });

                        /** Insert Into Table Message */
                        $message = new Message();
                        $message->user_id = $update->user->id;
                        $message->title = 'BOOKING PLAN';
                        $message->description = "Your Current Plan status is Booking immediately complete and confirm payment.";
                        $message->status = 'booking';
                        $message->created_by = '1';
                        $message->save();
                    }elseif(strtolower($req->status) == 'issued'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'ISSUED PLAN';
                        $data['content']    = "Your Current Plan status is <strong>Issued</strong> Please wait for confirmation and more info from Pandu Admin.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });

                        /** Insert Into Table Message */
                        $message = new Message();
                        $message->user_id = $update->user->id;
                        $message->title = 'ISSUED PLAN';
                        $message->description = "Your Current Plan status is Issued Please wait for confirmation and more info from Pandu Admin.";
                        $message->status = 'issued';
                        $message->created_by = '1';
                        $message->save();
                        
                    }elseif(strtolower($req->status) == 'ticketed'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'TICKETED PLAN';
                        $data['content']    = "Your Current Plan status is <strong>Ticketed</strong> Please Check details of your order and itinerary on the application.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });

                        /** Insert Into Table Message */
                        $message = new Message();
                        $message->user_id = $update->user->id;
                        $message->title = 'TICKETED PLAN';
                        $message->description = "Your Current Plan status is Ticketed Please Check details of your order and itinerary on the application.";
                        $message->status = 'ticketed';
                        $message->created_by = '1';
                        $message->save();
                    }
                }

                $result = $this->generate_response($update,200,'Data Has Been Updated.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
    * Display all dashboard data.
    *
    * @return \Illuminate\Http\Response
    */
    public function dashboard(Request $req)
    {
        $param_insert = array(
            'name' => 'dashboard_data',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        if($req->input('city_id')){
            /** Set Params */
            $city_id = $req->input('city_id');
            $this_date = date('Y-m-d');
   
            $result['tourism_place']            = TourismPlace::where('status', 'active')->where('city_id', $city_id)->count();
            $result['package']                  = Package::with('packagedetail.tourismplace')->where('status', 'active')->whereHas('packagedetail.tourismplace', function($query) use ($city_id) {
                $query->where('city_id' , $city_id);
            })->count();
            $result['plan']                     = Plan::with('plandetail.tourismplace')->where('status', 'active')->whereHas('plandetail.tourismplace', function($query) use ($city_id) {
                $query->where('city_id' , $city_id);
            })->count();
            $result['last_ten_transactions']    = Plan::with('plandetail.tourismplace')->where('status', 'active')->whereHas('plandetail.tourismplace', function($query) use ($city_id) {
                $query->where('city_id' , $city_id);
            })->orderBy('created_at', 'desc')->get();
            $result['top_ten_tourism_places']   = DB::table('plan_details')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->select('tourism_places.*', DB::raw('count(*) as total'))
                                                    ->where('tourism_places.city_id',$city_id)
                                                    ->groupBy('tourism_place_id')
                                                    ->orderBy('total', 'desc')
                                                    ->limit(10)
                                                    ->get();
            $result['user']                     = User::where('status', 'active')->where('city_id',$city_id)->count();
            $result['registered_user_this_day'] = User::where(DB::raw('date(DATE_ADD(created_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))->where('city_id',$city_id)->count();
            $result['income_this_day']          = DB::table('plans')
                                                    ->select('plans.total_price')
                                                    ->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->where('plans.status','ticketed')
                                                    ->where('tourism_places.city_id',$city_id)
                                                    ->where(DB::raw('date(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))
                                                    ->groupBy('plan_details.plan_id')
                                                    ->get();
            $result['income_this_day']          = $this->sumArrayKey($result['income_this_day'],'total_price');
            $result['transaction_this_day']     = count(DB::table('plans')
                                                    ->select('plans.id as transaction')
                                                    ->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->where('plans.status','ticketed')
                                                    ->where('tourism_places.city_id',$city_id)
                                                    ->where(DB::raw('date(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))
                                                    ->groupBy('plan_details.plan_id')
                                                    ->get());
        }else{
            /** Set Params */
            $this_date = date('Y-m-d');
            
            $result['tourism_place']            = TourismPlace::where('status', 'active')->count();
            $result['package']                  = Package::where('status', 'active')->count();
            $result['plan']                     = Plan::count();
            $result['last_ten_transactions']    = Plan::orderBy('created_at', 'desc')->get();
            $result['top_ten_tourism_places']   = DB::table('plan_details')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->select('tourism_places.*', DB::raw('count(*) as total'))
                                                    ->groupBy('tourism_place_id')
                                                    ->orderBy('total', 'desc')
                                                    ->limit(10)
                                                    ->get();
            $result['user']                     = User::where('status', 'active')->where('city_id',$city_id)->count();
            $result['registered_user_this_day'] = User::where(DB::raw('date(DATE_ADD(created_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))->where('city_id',$city_id)->count();
            $result['income_this_day']          = DB::table('plans')
                                                    ->select('plans.total_price')
                                                    ->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->where('plans.status','ticketed')
                                                    ->where(DB::raw('date(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))
                                                    ->groupBy('plan_details.plan_id')
                                                    ->get();
            $result['income_this_day']          = $this->sumArrayKey($result['income_this_day'],'total_price');
            $result['transaction_this_day']     = count(DB::table('plans')
                                                    ->select('plans.id as transaction')
                                                    ->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id')
                                                    ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                    ->where('plans.status','ticketed')
                                                    ->where(DB::raw('date(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),DB::raw('date("'.$this_date.'")'))
                                                    ->groupBy('plan_details.plan_id')
                                                    ->get());
            
        }

        $result = $this->generate_response($result, 200, 'All Data.', false);
        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    private function sumArrayKey($items, $key=''){
        // print_r($items);exit();
        $sum = 0;
        foreach($items as $item) {
            $sum += $item->$key;
        }

        return $sum;
    }

    public function reportData(Request $req){
        /** Datatable Data */


        /** Get Chart Data */
        $result = $this->reportChart($req);
        $result = $this->generate_response($result, 200, 'All Data.', false);
        return response()->json($result, 200);
    }

    /** For Generate Chart Data */
    public function reportChart($req){

        if($req->input('type')=='yearly'){
            $chart_data   = DB::table('plans');
            $chart_data   = $chart_data->select(DB::raw('year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR)) as year, month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR)) as month,(select sum(total_price) from plans where year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=year and month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=month) as total_price, (select count(id) from plans where year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=year and month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=month) as total_transaction'));
            $chart_data   = $chart_data->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id');
            $chart_data   = $chart_data->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id');

            /** if filter by city */
            if($req->input('city_id')){
                $chart_data   = $chart_data->where('tourism_places.city_id',$req->input('city_id'));
            }

            $chart_data   = $chart_data->where('plans.status','ticketed');
            $chart_data   = $chart_data->where(DB::raw('year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),$req->input('year'));
            $chart_data   = $chart_data->groupBy(DB::raw('year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'));
            $chart_data   = $chart_data->groupBy(DB::raw('month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'));
            $chart_data   = $chart_data->get();
            
            $res = $this->parseYearly($chart_data,$req->input('year'));
        }elseif($req->input('type')=='monthly'){
            $chart_data   = DB::table('plans');
            $chart_data   = $chart_data->select(DB::raw('day(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR)) as day_temp,year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR)) as year, month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR)) as month, (select sum(total_price) from plans where day(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=day_temp and year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=year and month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=month) as total_price, (select count(id) from plans where day(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=day_temp and year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=year and month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))=month) as total_transaction'));
            $chart_data   = $chart_data->leftjoin('plan_details', 'plans.id', '=', 'plan_details.plan_id');
            $chart_data   = $chart_data->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id');

            /** if filter by city */
            if($req->input('city_id')){
                $chart_data   = $chart_data->where('tourism_places.city_id',$req->input('city_id'));
            }

            $chart_data   = $chart_data->where('plans.status','ticketed');
            $chart_data   = $chart_data->where(DB::raw('year(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),$req->input('year'));
            $chart_data   = $chart_data->where(DB::raw('month(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'),$req->input('month'));
            $chart_data   = $chart_data->groupBy(DB::raw('day(DATE_ADD(plans.updated_at, INTERVAL 7 HOUR))'));
            $chart_data   = $chart_data->get();
            
            $res = $this->parseMonthly($chart_data,$req->input('year'),$req->input('month'));
        }
        
        return $res;
        
    }

    /** Parsing Month if not found on database */
    private function parseYearly($chart_data,$year){
        $result = array();
        for($i=0;$i<12;$i++){
            for($j=0;$j<count($chart_data);$j++){
                if($chart_data[$j]->month==$i+1){
                    $result[$i] = new \stdClass();
                    $result[$i]->year = $chart_data[$j]->year;
                    $result[$i]->month = $chart_data[$j]->month;
                    $result[$i]->total_price = $chart_data[$j]->total_price;
                    break;
                }else{
                    $result[$i] = new \stdClass();
                    $result[$i]->year = $year;
                    $result[$i]->month = $i+1;
                    $result[$i]->total_price = '0';
                }
            }
        }

        return $result;
    }

    /** Parsing Day if not found on database */
    private function parseMonthly($chart_data,$year,$month){
        $result = array();

        /** Get Number Of Day from param year and month */
        $number_of_day = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
        for($i=0;$i<$number_of_day;$i++){
            for($j=0;$j<count($chart_data);$j++){
                if($chart_data[$j]->day_temp==$i+1){
                    $result[$i] = new \stdClass();
                    $result[$i]->year = $chart_data[$j]->year;
                    $result[$i]->month = $chart_data[$j]->month;
                    $result[$i]->day = $chart_data[$j]->day_temp;
                    $result[$i]->total_price = $chart_data[$j]->total_price;
                    $result[$i]->total_transaction = $chart_data[$j]->total_transaction;
                    break;
                }else{
                    $result[$i] = new \stdClass();
                    $result[$i]->year = $year;
                    $result[$i]->month = $month;
                    $result[$i]->day = $i+1;
                    $result[$i]->total_price = '0';
                    $result[$i]->total_transaction = '0';
                }
            }
        }

        return $result;
    }
}
