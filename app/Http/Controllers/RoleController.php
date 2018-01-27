<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\Role;
use App\Model\City;

class RoleController extends Controller
{
    /**
    * Create a new auth instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $role = Role::where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($role, 200, 'All Data.', false);

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
            'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($role, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $role = new Role();

            $role->name = $req->has('name') ? $req->name : '';
            $role->status = 'active';

            $role->save();

            $result = $this->generate_response($role, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::where('status', '!=', 'deleted')->find($id);
        
        if (!$role) {
            $role = array();
        }

        $result = $this->generate_response($role, 200, 'Detail Data.', false);

        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($role, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $role = Role::find($id);

            $role->name = $req->has('name') ? $req->name : '';
                                    
            $role->save();

            $result = $this->generate_response($role, 200, 'Data Has Been Updated.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        $role->status = 'deleted';
        
        $role->save();
        
        $result = $this->generate_response($role, 200, 'Data Has Been Deleted.', false);

        return response()->json($result, 200);
    }
}
