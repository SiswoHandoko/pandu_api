<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\InfoPayment;

class InfoPaymentController extends Controller
{
    private $fields_infopayments = array(
        'id',
        'bank',
        'no_rek',
        'name',
        'status'
    );

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
        $param_insert = array(
            'name' => 'infopayment_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);
        
        $infopayment = new InfoPayment;
        $infopayment = $infopayment->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $infopayment = $infopayment->where('bank', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_infopayments))) {
                foreach ($explode_by as $key => $value) {
                    $infopayment = $infopayment->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_infopayments)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $infopayment = $infopayment->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $infopayment = $infopayment->offset($offset);
            $infopayment = $infopayment->limit($req->input('limit'));
        }
        
        $infopayment = $infopayment->get();

        $result = $this->generate_response($infopayment, 200, 'All Data.', false);

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
            'name' => 'infopayment_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'bank' => 'required',
            'no_rek' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $infopayment = new InfoPayment();

            $infopayment->bank = $req->has('bank') ? $req->bank : 0;
            $infopayment->no_rek = $req->has('no_rek') ? $req->no_rek : '';
            $infopayment->name = $req->has('name') ? $req->name : '';
            $infopayment->status = 'active';

            $infopayment->save();

            $result = $this->generate_response($infopayment, 200, 'Data Has Been Saved.', false);

            $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'infopayment_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);
        
        if (!$infopayment) {
            $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($infopayment, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'infopayment_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'bank' => 'required',
            'no_rek' => 'required',
            'name' => 'required'
        ]);


        if($validator->fails()) {
            $result = $this->generate_response($infopayment, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);

            if (!$infopayment) {
                $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            } else {
                $infopayment->bank = $req->has('bank') ? $req->bank : $infopayment->bank;
                $infopayment->no_rek = $req->has('no_rek') ? $req->no_rek : $infopayment->no_rek;
                $infopayment->name = $req->has('name') ? $req->name : $infopayment->name;
                $infopayment->status = $req->has('status') ? $req->status : $infopayment->status;
                
                $infopayment->save();

                $result = $this->generate_response($infopayment, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'infopayment_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $infopayment = InfoPayment::where('status', '!=', 'deleted')->find($id);

        if (!$infopayment) {
            $result = $this->generate_response($infopayment, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $infopayment->status = 'deleted';
            
            $infopayment->save();
            
            $result = $this->generate_response($infopayment, 200, 'Data Has Been Deleted.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    private function check_where($where_by, $where_fields)
    {
        foreach ($where_by as $key => $value) {
            if (!in_array($value, $where_fields)) {
                return false;
            }
        }

        return true;
    }

    
}
