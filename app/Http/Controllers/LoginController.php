<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User;
class LoginController extends Controller
{
    /**
     * Index login controller
     *
     * When user success login will retrive callback as api_token
     */
    public function index(Request $request)
    {
        /* bundling data */
        $hasher = app()->make('hash');
        $email = $request->input('email');
        $password = $request->input('password');

        /* get data */
        $login = User::where('email', $email)->first();

        /* result */
        if (!$login) {
            $res['success'] = false;
            $res['message'] = 'Your email or password incorrect!';
            return response($res);
        }else{
            if ($hasher->check($password, $login->password)) {
                $api_token = sha1(time());
                if($request->header('device-type')=='web'){
                    $create_token = User::where('id', $login->id)->update(['web_token' => $api_token]);
                    if ($create_token) {
                        $res['success'] = true;
                        $res['web_token'] = $api_token;
                        $res['message'] = $login;
                        return response($res);
                    }
                }elseif($request->header('device-type')=='android'){
                    $create_token = User::where('id', $login->id)->update(['android_token' => $api_token]);
                    if ($create_token) {
                        $res['success'] = true;
                        $res['android_token'] = $api_token;
                        $res['message'] = $login;
                        return response($res);
                    }
                }elseif($request->header('device-type')=='ios'){
                    $create_token = User::where('id', $login->id)->update(['ios_token' => $api_token]);
                    if ($create_token) {
                        $res['success'] = true;
                        $res['ios_token'] = $api_token;
                        $res['message'] = $login;
                        return response($res);
                    }
                }
            }else{
                $res['success'] = true;
                $res['message'] = 'You email or password incorrect!';
                return response($res);
            }
        }
    }
}
