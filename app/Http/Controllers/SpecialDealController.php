<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\SpecialDeal;

class SpecialDealController extends Controller
{
    private $fields_specialdeals = array(
        'id',
        'tourism_place_id',
        'package_id',
        'rate',
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
        $specialdeal = new SpecialDeal;
        $specialdeal = $specialdeal->with('tourismplace', 'package');
        $specialdeal = $specialdeal->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $specialdeal = $specialdeal->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_specialdeals))) {
                foreach ($explode_by as $key => $value) {
                    $specialdeal = $specialdeal->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($specialdeal, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_specialdeals)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $specialdeal = $specialdeal->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($specialdeal, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $specialdeal = $specialdeal->offset($offset);
            $specialdeal = $specialdeal->limit($req->input('limit'));
        }

        $specialdeal = $specialdeal->get();

        $result = $this->generate_response($specialdeal, 200, 'All Data.', false);

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
          'tourism_place_id' => 'required|max:255',
          'package_id' => 'required|max:255',
          'rate' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($specialdeal,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $specialdeal = new SpecialDeal();
            $specialdeal->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : '';
            $specialdeal->package_id = $req->has('package_id') ? $req->package_id : '';
            $specialdeal->rate = $req->has('rate') ? $req->rate : '';
            $specialdeal->status = 'active';
            $specialdeal->save();
            $result = $this->generate_response($specialdeal,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialdeal = SpecialDeal::with('tourismplace','package')->where('status','!=','deleted')->find($id);
        if(!$specialdeal){
            $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($specialdeal, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|max:255',
            'package_id' => 'required|max:255',
            'rate' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($specialdeal,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $specialdeal = SpecialDeal::find($id);
            if(!$specialdeal){
                $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $specialdeal->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : $specialdeal->tourism_place_id;
                $specialdeal->package_id = $req->has('package_id') ? $req->package_id : $specialdeal->package_id;
                $specialdeal->rate = $req->has('rate') ? $req->rate : $specialdeal->rate;
                $specialdeal->status = $req->has('status') ? $req->status : $specialdeal->status;
                $specialdeal->save();
                $result = $this->generate_response($specialdeal,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpecialDeal  $specialdeal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialdeal = SpecialDeal::find($id);
        if(!$specialdeal){
            $result = $this->generate_response($specialdeal, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $specialdeal->status = 'deleted';
            $specialdeal->save();
            $result = $this->generate_response($specialdeal,200,'Data Has Been Deleted.',false);
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
