<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
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
        $tables = $this->get_table();
        /* Validation */
        $validator = Validator::make($req->all(), [
          'table' => 'required|max:255|in:'.$tables,
          'field' => 'required|max:255|in:status',
          'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($update,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $modeldir   = "App\Model\ ";
            $modelname  = ucfirst(rtrim($req->table,'s'));
            $model      = trim($modeldir).$modelname;

            $update = $model::find($id);
            if(!$update){
                $result = $this->generate_response($update, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $update->status = $req->has('status') ? $req->status : '';
                $update->save();

                /* If Table is plan */
                if(strtolower($req->table)=='plans'){

                    if(strtolower($req->status) == 'draft'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'DRAFT PLAN';
                        $data['content']    = "Status plan anda saat ini masih <strong>Draft</strong> segera selesaikan dan submit plan anda.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });

                    }elseif(strtolower($req->status) == 'order'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'ORDER PLAN';
                        $data['content']    = "Status plan anda saat ini adalah <strong>Order</strong> segera selesaikan dan konfirmasi pembayaran.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });
                    }elseif(strtolower($req->status) == 'issued'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'ISSUED PLAN';
                        $data['content']    = "Status plan anda saat ini adalah <strong>Issued</strong> Silahkan tunggu konfirmasi dan info selanjutnya dari Pandu Admin.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });
                    }elseif(strtolower($req->status) == 'ticketed'){
                        /* Email Process */
                        $data['to']         = $update->user->email;
                        $data['alias']      = 'Admin Pandu';
                        $data['subject']    = 'TICKETED PLAN';
                        $data['content']    = "Status plan anda saat ini adalah <strong>Ticketed</strong> Silahkan Check detail order dan itinerary anda pada aplikasi.";
                        $data['name']       = $update->user->username;

                        $email              = $data;
                        Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                            $send->to($email['to'])->subject($email['subject']);
                            $send->from('admin@pandu.com', $email['alias']);
                        });
                    }
                }

                $result = $this->generate_response($update,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

}
