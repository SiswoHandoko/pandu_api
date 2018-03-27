<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;

class FcmController extends Controller
{
    /**
     * @var FirebaseInterface
     */
    private $firebase;
    protected function getPackageProviders($app)
    {
        return ['SafeStudio\Firebase\FirebaseServiceProvider'];
    }

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

    public function saveToFirebase($notification, $orderId, $user) {
        $config = [
            'api_key' => 'AIzaSyASD5vZNA-DeS93cFU8oz40nycp1CIZ3bg',
            'auth_domain' => 'coal-trade-dev.firebaseapp.com',
            'database_url' => 'https://coal-trade-dev.firebaseio.com/dev/bib',
            'secret' => 'f8wEJWpGWfTw9n3oOZdVjw95woQrnzPQR5csRR35',
            'storage_bucket' => 'coal-trade-dev.appspot.com',
            'messaging_sender_id' => '328150955221'
        ];

        $firebaseClient = new FirebaseLib(config('services.firebase.database_url'), config('services.firebase.secret'));
        $FIREBASE_API_ACCESS_KEY = config('services.firebase_dev.api_key');
    }

    public function testSetFunction()
    {
        $firebase = new \Geckob\Firebase\Firebase('C:\xampp\htdocs\pandu_api\firebaseConfig.json');
        
        // Set the parent node. 
        $firebase = $firebase->setPath('dev/');

        // Create Custom Object If the node already exist, it will update the value
        // $firebase->set('production2','testValue');
        
        /* Create Custom Object with multiple nodes, if it doesnt exist, it will create the node
        // $firebase->set('testObject/testKey', 'testValueObject');

        /* Create Object with auto key. This requires to call setPath first to identify the parent */
        $firebase->push([
            'test_1' => 'value_1',
            'test_2' => 'value_2'
        ]);
        
        /* Delete Data Sample */
        // $firebase->delete('-L8SbKa9vNiPEVTRrNeN');
        // $firebase->delete('testObject/testKey');

        /* Get data by Key  */
        $data = json_decode($firebase->get('-L8Scd1bYx0JNBmquJIQ'));
    
        return response()->json($data);
    }
}
