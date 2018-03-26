<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Plan;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    private $fields_users = array(
        'id',
        'role_id',
        'firstname',
        'lastname',
        'contact',
        'address',
        'birthdate',
        'username',
        'password',
        'email',
        'web_token',
        'android_token',
        'ios_token',
        'photo',
        'is_login',
        'status'
    );

    private $fields_plans = array(
        'id',
        'user_id',
        'guide_id',
        'total_adult',
        'total_child',
        'total_infant',
        'total_tourist',
        'days',
        'start_date',
        'end_date',
        'total_price',
        'receipt',
        'type',
        'status'
    );

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $param_insert = array(
            'name' => 'user_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $user = new User;
        $user = $user->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $user = $user->where('username', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_users))) {
                foreach ($explode_by as $key => $value) {
                    $user = $user->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($user, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_users)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $user = $user->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($user, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $user = $user->offset($offset);
            $user = $user->limit($req->input('limit'));
        }

        $user = $user->get();

        $result = $this->generate_response($user, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $param_insert = array(
            'name' => 'user_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );
        
        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
          'firstname' => 'required|max:255',
          'lastname' => 'required|max:255',
          'contact' => 'required|max:255',
          'address' => 'required|max:255',
          'birthdate' => 'required|max:255',
          'username' => 'required|max:255',
          'password' => 'required|max:255',
          'repassword' => 'required|max:255',
          'email' => 'required|max:255',
          'role_id' => 'required|max:255|in:1,2,3',
          'photo' => 'max:2048',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($user,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{

            /* Unique Field Validation */
            $unique_validator = Validator::make($req->all(), [
              'username' => 'unique:users',
              'email' => 'unique:users',
            ]);

            if($unique_validator->errors()->first('username')!='') {
                $result = $this->generate_response($user,1,'This Username already taken by others.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }elseif($unique_validator->errors()->first('email')!='') {
                $result = $this->generate_response($user,2,'This Email already taken by others.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }else{
                /* bundling data */
                $hasher = app()->make('hash');
                $password = $hasher->make($req->input('password'));
                
                /* Email Process */
                $data['to']         = $req->input('email');
                $data['alias']      = 'Admin Pandu';
                $data['subject']    = 'INFO REGISTRASI';
                $data['content']    = "Congratulations your account has been registered with Pandu Apps. <br/> Please login on the application to start creating Plan.";
                $data['name']       = $req->input('username');

                $email              = $data;
                Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                    $send->to($email['to'])->subject($email['subject']);
                    $send->from('admin@pandu.com', $email['alias']);
                });
                
                $user = new User();
                $user->firstname = $req->has('firstname') ? $req->firstname : '';
                $user->lastname = $req->has('lastname') ? $req->lastname : '';
                $user->contact = $req->has('contact') ? $req->contact : '';
                $user->address = $req->has('address') ? $req->address : '';
                $user->birthdate = $req->has('birthdate') ? $req->birthdate : '0000-00-00';
                $user->username = $req->has('username') ? $req->username : '';
                $user->password = $password;
                $user->email = $req->has('email') ? $req->email : '';
                $user->role_id = $req->has('role_id') ? $req->role_id : '1';
                $user->status = 'active';
                /* upload process */
                $user->photo = $req->has('photo') ? env('BACKEND_URL').'public/images/users/'.$this->uploadFile($this->public_path(). "/images/users/", $req->photo) : env('BACKEND_URL').'public/images/users/default_img.png';
                $user->save();

                $result = $this->generate_response($user,200,'Data Has Been Saved.',false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'user_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $user = User::where('status','!=','deleted')->find($id);

        if(!$user){
            $result = $this->generate_response($user,404,'Data Not Found.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($user,200,'Detail Data.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        $param_insert = array(
            'name' => 'user_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'contact' => 'required|max:255',
            'address' => 'required|max:255',
            'birthdate' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'max:255',
            'repassword' => 'max:255',
            'email' => 'required|max:255',
            'role_id' => 'required|max:255|in:1,2,3',
            'status' => 'required|max:255',
            'photo' => 'max:2048',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($user,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            /* Custom Unique Field Validation */
            $username = User::where([['username', '=', $req->username],['id', '!=', $id]])->first();
            $email = User::where([['email', '=', $req->email],['id', '!=', $id]])->first();

            if($username) {
                $result = $this->generate_response($user,1,'This Username already taken by others.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }elseif($email) {
                $result = $this->generate_response($user,2,'This Email already taken by others.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }else{
                $user = User::find($id);
                if(!$user){
                    $result = $this->generate_response($user,404,'Data Not Found.',true);

                    $this->update_access_log($access_log_id, $result);

                    return response()->json($result, 404);
                }else{
                    /* Change Password */
                    if($req->has('password') && $req->has('repassword')){
                        $hasher = app()->make('hash');
                        $new_password = $hasher->make($req->password);

                        if($new_password!=$user->password){
                            /* Email Process */
                            $data['to']         = $user->email;
                            $data['alias']      = 'Admin Pandu';
                            $data['subject']    = 'GANTI PASSWORD';
                            $data['content']    = "Your password has been changed. <br/> Please Login with your new password. <br/> Your New Password: <strong>".$req->password."</strong>";
                            $data['name']       = $user->username;
                            
                            $email              = $data;
                            Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                                $send->to($email['to'])->subject($email['subject']);
                                $send->from('admin@pandu.com', $email['alias']);
                            });
                        }
                    }

                    $user->firstname = $req->has('firstname') ? $req->firstname : $user->firstname;
                    $user->lastname = $req->has('lastname') ? $req->lastname : $user->lastname;
                    $user->contact = $req->has('contact') ? $req->contact : $user->contact;
                    $user->address = $req->has('address') ? $req->address : $user->address;
                    $user->birthdate = $req->has('birthdate') ? $req->birthdate : $user->birthdate;
                    $user->username = $req->has('username') ? $req->username : $user->username;
                    $user->password = $req->has('password') ? $new_password : $user->password;
                    $user->email = $req->has('email') ? $req->email : $user->email;
                    $user->role_id = $req->has('role_id') ? $req->role_id : $user->role_id;
                    $user->status = $req->has('status') ? $req->status : $user->status;
                    /* upload process */
                    $user->photo = $req->has('photo') ? env('BACKEND_URL').'public/images/users/'.$this->uploadFile($this->public_path(). "/images/users/", $req->photo, $user->photo) : $user->photo;
                    $user->save();

                    $result = $this->generate_response($user,200,'Data Has Been Updated.',false);

                    $this->update_access_log($access_log_id, $result);

                    return response()->json($result, 200);
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'user_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $user = User::where('status', '!=', 'deleted')->find($id);

        if(!$user){
            $result = $this->generate_response($user,404,'Data Not Found.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $user->status = 'deleted';
            $user->save();

            $result = $this->generate_response($user,200,'Data Has Been Deleted.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Index for login
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $param_insert = array(
            'name' => 'user_login',
            'params' => json_encode(collect($request)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($request->all(), [
          'username' => 'required|max:255',
          'password' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($city,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $result = $this->authentication($request);

            $this->update_access_log($access_log_id, $result);
        }
        return response()->json($result, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function logout($id)
    {
        $param_insert = array(
            'name' => 'user_logout',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $user = User::find($id);

        if(!$user){
            $result = $this->generate_response($user,404,'Data Not Found.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        }else{
            $user->is_login = 0;
            $user->web_token = '';
            $user->save();

            $result = $this->generate_response($user,200,'You are already logout.',false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Authenticate for login
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function authentication($request){
        $param_insert = array(
            'name' => 'user_authentication',
            'params' => json_encode(collect($request)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* bundling data */
        $hasher = app()->make('hash');
        $username = $request->input('username');
        $password = $request->input('password');

        /* get data */
        $login = User::where('username', $username)->where('status','!=','deleted')->first();

        /* result */
        if (!$login) {
            /* Username Not Found */
            $res = $this->generate_response($login,1,'Your username or password incorrect!',true);

            $this->update_access_log($access_log_id, $res);

            return $res;
        }else{
            if ($hasher->check($password, $login->password)) {
                $api_token = sha1(time());
                if($request->header('device-type')=='web'){
                    /* Force Login Web */
                    if(!$request->input('force_login') && $login->is_login=='1'){
                        $res = $this->generate_response($login,201,'Your account is login on other device!',false);

                        $this->update_access_log($access_log_id, $res);

                        return $res;
                    }else{
                        $create_token = User::where('id', $login->id)->update(['web_token' => $api_token, 'is_login' => 1]);
                        if ($create_token) {
                            /* Set Web Token As Result */
                            $login['token'] = $api_token;
                            $login['is_login'] = 1;
                            $res = $this->generate_response($login,200,'Success Login on Web!',false);

                            $this->update_access_log($access_log_id, $res);

                            return $res;
                        }
                    }
                }elseif($request->header('device-type')=='android'){
                    $create_token = User::where('id', $login->id)->update(['android_token' => $api_token]);
                    if ($create_token) {
                        /* Set Android Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on Android!',false);

                        $this->update_access_log($access_log_id, $res);

                        return $res;
                    }
                }elseif($request->header('device-type')=='ios'){
                    $create_token = User::where('id', $login->id)->update(['ios_token' => $api_token]);
                    if ($create_token) {
                        /* Set IOS Token As Result */
                        $login['token'] = $api_token;
                        $res = $this->generate_response($login,200,'Success Login on IOS!',false);

                        $this->update_access_log($access_log_id, $res);

                        return $res;
                    }
                }
            }else{
                /* Password Incorrect */
                $login = null;
                $res = $this->generate_response($login,1,'Your username or password incorrect!',true);

                $this->update_access_log($access_log_id, $res);

                return $res;
            }
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function user_by_plan(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'user_by_plan',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $plan = new Plan;
        $plan = $plan->with('user', 'guide');
        $plan = $plan->where('user_id', $id);
        $plan = $plan->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $plan = $plan->where('start_date', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_plans))) {
                foreach ($explode_by as $key => $value) {
                    $plan = $plan->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($plan, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_plans)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $plan = $plan->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($plan, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $plan = $plan->offset($offset);
            $plan = $plan->limit($req->input('limit'));
        }

        $plan = $plan->get();

        $result = $this->generate_response($plan, 200, 'All Data.', false);

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    /**
     * For Forgot Password
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function forgot_password(Request $request)
    {
        $param_insert = array(
            'name' => 'user_forgot_password',
            'params' => json_encode(collect($request)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($request->all(), [
          'email' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($user,400,'Bad Request.',true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $select = new User;
            $select = $select->where('status', '!=', 'deleted')->where('email', $request->email)->first();

            if(!$select){
                $result = $this->generate_response($user,404,'Email Not Found.',true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }else{
                /* bundling data */
                $new_password = str_random(8);
                $hasher = app()->make('hash');
                $password = $hasher->make($new_password);

                /* replace password */
                $user = User::find($select->id);
                $user->password = $password;
                $user->save();
                $user->new_password = $new_password;

                /* Email Process */
                $data['to']         = $select->email;
                $data['alias']      = 'Admin Pandu';
                $data['subject']    = 'LUPA PASSWORD';
                $data['content']    = "Your password has been changed. <br/> Please Login with your new password. <br/> Your New Password: <strong>".$new_password."</strong>";
                $data['name']       = $select->username;

                $email              = $data;
                Mail::send('emails.template', ['params'=>$data], function($send) use ($email){
                    $send->to($email['to'])->subject($email['subject']);
                    $send->from('admin@pandu.com', $email['alias']);
                });

                $result = $this->generate_response($user, 200, 'Success Change Password.', false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }
}
