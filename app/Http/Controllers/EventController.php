<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\City;

class EventController extends Controller
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

        // $event = Event::with('tourismplace')
        //     ->where('status', '!=', 'deleted')
        //     ->where('name', 'LIKE', '%'.$search_query.'%')
        //     ->orderBy($order_by, $order_type)
        //     ->offset($offset)
        //     ->limit($limit)
        //     ->get();

        $event = Event::with('tourismplace');
        $event->where('status', '!=', 'deleted');
        $event->where('name', 'LIKE', '%'.$search_query.'%');
        $event->orderBy($order_by, $order_type);
        $event->offset($offset);
        $event->limit($limit);
        $event->get();
        
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
}
