<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;

class FcmController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendnotif(Request $req)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
          'token' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($mails,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            define( 'API_ACCESS_KEY', 'AAAA7ucyRps:APA91bGu8ov6Ge0eJs6iUacelqxqS2NtJyYyZmdk-UWvwNFhPWNuAm_4Mh2_-WdlHN3ZlXgVLCbEWm9chOxIbLER50wyq9MxGfvAAWxVcl4rf1kIggxFlrndfZ015JTNsfiDTI7qSi8P');
            /* preparation for param bundle */
            $msg = array
            (
                'body' 	=> 'Firebase Push Notification',
                'title'	=> 'Example Title',
            );
            $fields = array
        	(
                'to'		=> $req->token,
                'notification'	=> $msg
        	);
            $headers = array
            (
                'Authorization: key=' . API_ACCESS_KEY,
                'Content-Type: application/json'
            );

            /* Send Reponse To FireBase Server */
    		$ch = curl_init();
    		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    		curl_setopt( $ch,CURLOPT_POST, true );
    		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    		$result = curl_exec($ch );
    		echo $result;
    		curl_close( $ch );
        }
    }

}
