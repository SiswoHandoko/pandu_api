<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Package;

class PackageController extends Controller
{
    /**
    * Create a new auth instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $req)
    {
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $package = Package::with('packagedetail')
            ->where('status', '!=', 'deleted')
            ->where('name', 'LIKE', '%'.$search_query.'%')
            ->orWhere('description', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($package, 200, 'All Data.', false);

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
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        } else {
            $package = new Package();

            $package->name = $req->has('name') ? $req->name : '';
            $package->description = $req->has('description') ? $req->description : '';
            $package->status = $req->has('status') ? $req->status : 'active';

            $package->save();

            $result = $this->generate_response($package, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::with('packagedetail')->where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($package, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($package, 400, 'Bad Request.', true);
            
            return response()->json($result, 400);
        }else{
            $package = Package::where('status', '!=', 'deleted')->find($id);

            if (!$package) {
                $result = $this->generate_response($package, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $package->name = $req->has('name') ? $req->name : $package->name;
                $package->description = $req->has('description') ? $req->description : $package->description;
                $package->status = $req->has('status') ? $req->status : $package->status;

                $package->save();

                $result = $this->generate_response($package, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::where('status', '!=', 'deleted')->find($id);

        if (!$package) {
            $result = $this->generate_response($package, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $package->status = 'deleted';
            
            $package->save();
            
            $result = $this->generate_response($package,200,'Data Has Been Deleted.',false);
            
            return response()->json($result, 200);
        }
    }
}
