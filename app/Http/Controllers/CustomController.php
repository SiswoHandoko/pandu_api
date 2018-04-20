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

        $result['tourism_place']            = TourismPlace::where('status', 'active')->count();
        $result['package']                  = Package::where('status', 'active')->count();
        $result['plan']                     = Plan::count();
        $result['user']                     = User::where('status', 'active')->count();
        $result['last_ten_transactions']    = Plan::orderBy('created_at', 'desc')->get();
        $result['top_five_tourism_places']  = DB::table('plan_details')
                                                ->leftjoin('tourism_places', 'tourism_places.id', '=', 'plan_details.tourism_place_id')
                                                ->select('tourism_places.*', DB::raw('count(*) as total'))
                                                ->groupBy('tourism_place_id')
                                                ->orderBy('total', 'desc')
                                                ->get();
        
        $result = $this->generate_response($result, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }
}
