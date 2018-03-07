<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\Event;

class EventController extends Controller
{
    private $fields_events = array(
        'id',
        'tourism_place_id',
        'name',
        'description',
        'start_date',
        'end_date',
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
        $event = new Event;
        $event = $event->with('tourismplace');
        $event = $event->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $event = $event->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_events))) {
                foreach ($explode_by as $key => $value) {
                    $event = $event->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($event, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_events)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $event = $event->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($event, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $event = $event->offset($offset);
            $event = $event->limit($req->input('limit'));
        }

        $event = $event->get();

        $result = $this->generate_response($event, 200, 'All Data.', false);

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
            'tourism_place_id' => 'required|min:0',
            'name' => 'required|max:255',
            'start_date' => 'required|date_format:"Y-m-d H:i:s"',
            'end_date' => 'required|date_format:"Y-m-d H:i:s"',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($event, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $event = new Event();

            $event->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
            $event->name = $req->has('name') ? $req->name : '';
            $event->description = $req->has('description') ? $req->description : '';
            $event->start_date = $req->has('start_date') ? $req->start_date : 0;
            $event->end_date = $req->has('end_date') ? $req->end_date : 0;
            $event->status = 'active';

            $event->save();

            $result = $this->generate_response($event, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::with('tourismplace')->where('status', '!=', 'deleted')->find($id);
        
        if (!$event) {
            $result = $this->generate_response($event, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($event, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|min:0',
            'name' => 'required|max:255',
            'start_date' => 'required|date_format:"Y-m-d H:i:s"',
            'end_date' => 'required|date_format:"Y-m-d H:i:s"',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($event, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $event = Event::where('status', '!=', 'deleted')->find($id);

            if (!$event) {
                $result = $this->generate_response($event, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $event->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
                $event->name = $req->has('name') ? $req->name : '';
                $event->description = $req->has('description') ? $req->description : '';
                $event->start_date = $req->has('start_date') ? $req->start_date : 0;
                $event->end_date = $req->has('end_date') ? $req->end_date : 0;
                            
                $event->save();

                $result = $this->generate_response($event, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::where('status', '!=', 'deleted')->find($id);

        if (!$event) {
            $result = $this->generate_response($event, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $event->status = 'deleted';
            
            $event->save();
            
            $result = $this->generate_response($event, 200, 'Data Has Been Deleted.', false);

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
