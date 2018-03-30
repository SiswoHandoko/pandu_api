<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\AccessLog;

class AccessLogController extends Controller
{
    private $fields_access_logs = array(
        'id',
        'name',
        'params',
        'result',
        'created_at',
        'updated_at'
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
        $accesslog = new AccessLog;

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $accesslog = $accesslog->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_access_logs))) {
                foreach ($explode_by as $key => $value) {
                    $accesslog = $accesslog->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($accesslog, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_access_logs)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $accesslog = $accesslog->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($accesslog, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $accesslog = $accesslog->offset($offset);
            $accesslog = $accesslog->limit($req->input('limit'));
        }

        $accesslog = $accesslog->get();

        $result = $this->generate_response($accesslog, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
