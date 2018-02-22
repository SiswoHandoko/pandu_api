<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\InfoPayment;
use App\Model\City;
use App\Model\Event;
use App\Model\Picture;

class InfoPaymentController extends Controller
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
        $search_query = $req->input('search_query') ? $req->input('search_query') : '';
        $offset = $req->input('offset') ? $req->input('offset') : 0;
        $limit = $req->input('limit') ? $req->input('limit') : 255;
        $order_by = $req->input('order_by') ? $req->input('order_by') : 'id';
        $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

        $infopayment = InfoPayment::where('status', '!=', 'deleted')
            ->where('bank', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($infopayment, 200, 'All Data.', false);

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
            'bank' => 'required',
            'no_rek' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $infopayment = new InfoPayment();

            $infopayment->bank = $req->has('bank') ? $req->bank : 0;
            $infopayment->no_rek = $req->has('no_rek') ? $req->no_rek : '';
            $infopayment->name = $req->has('name') ? $req->name : '';
            $infopayment->status = 'active';

            $infopayment->save();

            $result = $this->generate_response($infopayment, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfoPayment  $infopayment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);
        
        if (!$infopayment) {
            $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($infopayment, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoPayment  $infopayment
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'bank' => 'required',
            'no_rek' => 'required',
            'name' => 'required'
        ]);


        if($validator->fails()) {
            $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);

            if (!$infopayment) {
                $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $infopayment->bank = $req->has('bank') ? $req->bank : $infopayment->bank;
                $infopayment->no_rek = $req->has('no_rek') ? $req->no_rek : $infopayment->no_rek;
                $infopayment->name = $req->has('name') ? $req->name : $infopayment->name;
                $infopayment->status = $req->has('status') ? $req->status : $infopayment->status;
                
                $infopayment->save();

                $result = $this->generate_response($infopayment, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoPayment  $infopayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);

        if (!$infopayment) {
            $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $infopayment->status = 'deleted';
            
            $infopayment->save();
            
            $result = $this->generate_response($infopayment, 200, 'Data Has Been Deleted.', false);

            return response()->json($result, 200);
        }
    }
}
