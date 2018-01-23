<?php

namespace App\Http\Middleware;

use Closure;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            /* check if api-token header is empty or not */
            if (!empty($request->header('api-token'))) {
                /* check to db web */
                $token = $request->header('api-token');
                if($request->header('device-type')=='web'){
                    $check_token = DB::table('users')->select('web_token')->where(['web_token' => $token])->get();
                    if (count($check_token) == 0) {
                        $res['isError'] = true;
                        $res['errorCode'] = 101;
                        $res['message'] = 'Permission not allowed!';
                        $res['data'] = null;

                        return response($res);
                    }
                }elseif($request->header('device-type')=='android'){
                    $check_token = DB::table('users')->select('android_token')->where(['android_token' => $token])->get();
                    if (count($check_token) == 0) {
                        $res['isError'] = true;
                        $res['errorCode'] = 101;
                        $res['message'] = 'Permission not allowed!';
                        $res['data'] = null;

                        return response($res);
                    }
                }elseif($request->header('device-type')=='ios'){
                    $check_token = DB::table('users')->select('ios_token')->where(['ios_token' => $token])->get();
                    if (count($check_token) == 0) {
                        $res['isError'] = true;
                        $res['errorCode'] = 101;
                        $res['message'] = 'Permission not allowed!';
                        $res['data'] = null;

                        return response($res);
                    }
                }else{
                    $res['isError'] = true;
                    $res['errorCode'] = 101;
                    $res['message'] = 'Permission not allowed!';
                    $res['data'] = null;

                    return response($res);
                }

            }else{
                $res['isError'] = true;
                $res['errorCode'] = 102;
                $res['message'] = 'Login please!';
                $res['data'] = null;
                
                return response($res);
            }
        }
        return $next($request);
    }
}
