<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\User;
class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function register(Request $request)
    {
        /* bundling data */
        $hasher = app()->make('hash');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $hasher->make($request->input('password'));

        /* register */
        $register = User::create([
            'username'=> $username,
            'email'=> $email,
            'password'=> $password,
        ]);

        /* respone */
        if ($register) {
            $res['success'] = true;
            $res['message'] = 'Success register!';
            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to register!';
            return response($res);
        }
    }
    /**
    * Get user by id
    *
    * URL /user/{id}
    */
    public function get_user(Request $request, $id)
    {
        $user = User::where('id', $id)->get();
        if ($user) {
            $res['success'] = true;
            $res['message'] = $user;

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Cannot find user!';

            return response($res);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $user = User::get();
        $result = $this->generate_response($user,200,'All Data.',false);
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
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($user,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{

            /* Unique Field Validation */
            $unique_validator = Validator::make($req->all(), [
              'username' => 'unique:users',
              'email' => 'unique:users',
            ]);

            if($unique_validator->errors()->first('username')!='') {
                $result = $this->generate_response($user,1,'This Username already taken by others.',true);
                return response()->json($result, 200);
            }elseif($unique_validator->errors()->first('email')!='') {
                $result = $this->generate_response($user,2,'This Email already taken by others.',true);
                return response()->json($result, 200);
            }else{
                /* bundling data */
                $hasher = app()->make('hash');
                $password = $hasher->make($req->input('password'));

                $user = new User();
                $user->firstname = $req->firstname;
                $user->lastname = $req->lastname;
                $user->contact = $req->contact;
                $user->address = $req->address;
                $user->birthdate = $req->birthdate;
                $user->username = $req->username;
                $user->password = $req->password;
                $user->email = $req->email;
                $user->status = 'active';
                $user->save();
                $result = $this->generate_response($user,200,'Data Has Been Saved.',false);

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
        $user = User::find($id);
        $result = $this->generate_response($user,200,'Detail Data.',false);
        return response()->json($result, 200);
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
            'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($user,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            /* Custom Unique Field Validation */
            $username = User::where([['username', '=', $req->username],['id', '!=', $id]])->first();
            $email = User::where([['email', '=', $req->email],['id', '!=', $id]])->first();

            if($username) {
                $result = $this->generate_response($user,1,'This Username already taken by others.',true);
                return response()->json($result, 200);
            }elseif($email) {
                $result = $this->generate_response($user,2,'This Email already taken by others.',true);
                return response()->json($result, 200);
            }else{
                $user = User::find($id);
                $user->firstname = $req->firstname;
                $user->lastname = $req->lastname;
                $user->contact = $req->contact;
                $user->address = $req->address;
                $user->birthdate = $req->birthdate;
                $user->username = $req->username;
                $user->password = $req->password;
                $user->email = $req->email;
                $user->status = $req->status;
                $user->save();
                $result = $this->generate_response($user,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
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
        $user = User::find($id);
        $user->status = 'deleted';
        $user->save();
        $result = $this->generate_response($user,200,'Data Has Been Deleted.',false);
        return response()->json($result, 200);
    }
}
