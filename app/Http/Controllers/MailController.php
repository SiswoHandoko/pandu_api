<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendmail(Request $req)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
          'mail_to' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($mails,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $data['email'] = 'cs.siswo.handoko@gmail.com';
            $data['nama']  = 'Siswo Handoko';
            $email         = $data;
            Mail::send('emails.test', ['data'=>$data], function($send) use ($email){
                $send->to($email['email'], $email['nama'])->subject('Contoh Kirim Email via Mandrill!');
                $send->from('noreply@dipanduapp.com', 'Dipandu Customer Care');
            });
            return $email;
        }
    }

}
