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
                /* check to db */
                $token = $request->header('api-token');
                $check_token = DB::table('users')->select('api_token')->where(['api_token' => $token])->get();
                if (count($check_token) == 0) {
                    $res['success'] = false;
                    $res['message'] = 'Permission not allowed!';

                    return response($res);
                }
            }else{
                $res['success'] = false;
                $res['message'] = 'Login please!';

                return response($res);
            }
        }
        return $next($request);
    }
}
