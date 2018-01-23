<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Guide;
use App\Model\Admin;
class LoginController extends Controller
{
    /**
     * Index login controller
     *
     * When user success login will retrive callback as api_token
     */
    public function index(Request $request)
    {
        /* Validation */
        $validator = Validator::make($request->all(), [
          'email' => 'required|max:255',
          'password' => 'required|max:255',
          'type' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($city,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            if($request->input('type')=='user'){
                $result = $this->user($request);
            }elseif($request->input('type')=='guide'){
                $result = $this->guide($request);
            }elseif($request->input('type')=='admin'){
                $result = $this->admin($request);
            }
        }
        return response()->json($result, 200);
    }

    public function user($request){
        /* bundling data */
        $hasher = app()->make('hash');
        $email = $request->input('email');
        $password = $request->input('password');

        /* get data */
        $login = User::where('email', $email)->first();

        /* result */
        if (!$login) {
            /* Email Not Found */
            $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
            return $res;
        }else{
            if ($hasher->check($password, $login->password)) {
                $api_token = sha1(time());
                if($request->header('device-type')=='web'){
                    $create_token = User::where('id', $login->id)->update(['web_token' => $api_token]);
                    if ($create_token) {
                        /* Set Web Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on Web!',true);
                        return $res;
                    }
                }elseif($request->header('device-type')=='android'){
                    $create_token = User::where('id', $login->id)->update(['android_token' => $api_token]);
                    if ($create_token) {
                        /* Set Android Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on Android!',true);
                        return $res;
                    }
                }elseif($request->header('device-type')=='ios'){
                    $create_token = User::where('id', $login->id)->update(['ios_token' => $api_token]);
                    if ($create_token) {
                        /* Set IOS Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on IOS!',true);
                        return $res;
                    }
                }
            }else{
                /* Password Incorrect */
                $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
                return $res;
            }
        }
    }

    public function guide($request){
        /* bundling data */
        $hasher = app()->make('hash');
        $email = $request->input('email');
        $password = $request->input('password');

        /* get data */
        $login = Guide::where('email', $email)->first();

        /* result */
        if (!$login) {
            /* Email Not Found */
            $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
            return $res;
        }else{
            if ($hasher->check($password, $login->password)) {
                $api_token = sha1(time());
                if($request->header('device-type')=='web'){
                    $create_token = Guide::where('id', $login->id)->update(['web_token' => $api_token]);
                    if ($create_token) {
                        /* Set Web Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on Web!',true);
                        return $res;
                    }
                }elseif($request->header('device-type')=='android'){
                    $create_token = Guide::where('id', $login->id)->update(['android_token' => $api_token]);
                    if ($create_token) {
                        /* Set Android Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on Android!',true);
                        return $res;
                    }
                }elseif($request->header('device-type')=='ios'){
                    $create_token = Guide::where('id', $login->id)->update(['ios_token' => $api_token]);
                    if ($create_token) {
                        /* Set IOS Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on IOS!',true);
                        return $res;
                    }
                }
            }else{
                /* Password Incorrect */
                $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
                return $res;
            }
        }
    }

    public function admin($request){
        /* bundling data */
        $hasher = app()->make('hash');
        $email = $request->input('email');
        $password = $request->input('password');

        /* get data */
        $login = Admin::where('email', $email)->first();

        /* result */
        if (!$login) {
            /* Email Not Found */
            $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
            return $res;
        }else{
            if ($hasher->check($password, $login->password)) {
                $api_token = sha1(time());
                $create_token = Admin::where('id', $login->id)->update(['web_token' => $api_token]);
                if ($create_token) {
                    /* Set Web Token As Result */
                    $login['token'] = $api_token;
                    $res = $this->generate_response($login,200,'Success Login on Web!',true);
                    return $res;
                }
            }else{
                /* Password Incorrect */
                $res = $this->generate_response($login,1,'Your email or password incorrect!',true);
                return $res;
            }
        }
    }

}
