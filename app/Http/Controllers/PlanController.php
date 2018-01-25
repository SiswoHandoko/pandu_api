<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Plan;
class PlanController extends Controller
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
        $plan = Plan::with('user','guide','tourismplace')->where('status','!=','deleted')->get();
        $result = $this->generate_response($plan,200,'All Data.',false);
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
          'user_id' => 'required|numeric',
          'tourism_place_id' => 'required|numeric',
          'guide_id' => 'required|numeric',
          'start_date' => 'required|date_format:"Y-m-d H:i:s"',
          'end_date' => 'required|date_format:"Y-m-d H:i:s"',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plan,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $plan = new Plan();
            $plan->user_id = $req->has('user_id') ? $req->user_id : '0';
            $plan->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : '0';
            $plan->guide_id = $req->has('guide_id') ? $req->guide_id : '0';
            $plan->start_date = $req->has('start_date') ? $req->start_date : '000-00-00 00:00:00';
            $plan->end_date = $req->has('end_date') ? $req->end_date : '000-00-00 00:00:00';
            $plan->status = 'active';
            $plan->save();
            $result = $this->generate_response($plan,200,'Data Has Been Saved.',false);

        return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::with('user','guide','tourismplace')->where('status','!=','deleted')->find($id);
        $result = $this->generate_response($plan,200,'Detail Data.',false);
        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'user_id' => 'required|numeric',
            'tourism_place_id' => 'required|numeric',
            'guide_id' => 'required|numeric',
            'start_date' => 'required|date_format:"Y-m-d H:i:s"',
            'end_date' => 'required|date_format:"Y-m-d H:i:s"',
            'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($plan,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $plan = Plan::find($id);
            $plan->user_id = $req->has('user_id') ? $req->user_id : '0';
            $plan->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : '0';
            $plan->guide_id = $req->has('guide_id') ? $req->guide_id : '0';
            $plan->start_date = $req->has('start_date') ? $req->start_date : '000-00-00 00:00:00';
            $plan->end_date = $req->has('end_date') ? $req->end_date : '000-00-00 00:00:00';
            $plan->status = $req->has('status') ? $req->status : 'active';
            $plan->save();
            $result = $this->generate_response($plan,200,'Data Has Been Updated.',false);
            return response()->json($result, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->status = 'deleted';
        $plan->save();
        $result = $this->generate_response($plan,200,'Data Has Been Deleted.',false);
        return response()->json($result, 200);
    }

}
