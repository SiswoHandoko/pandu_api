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
        $event = Event::with('tourismplace')->where('status', '!=', 'deleted')->get();

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
            'start_date' => 'required',
            'end_date' => 'required',
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
            $event = array();
        }

        $result = $this->generate_response($event, 200, 'Detail Data.', false);

        return response()->json($result, 200);
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
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($event, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $event = Event::find($id);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->status = 'deleted';
        
        $event->save();
        
        $result = $this->generate_response($event, 200, 'Data Has Been Deleted.', false);

        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function event_by_tourismplace($id)
    {
        $event = Event::where('tourism_place_id', $id)->where('status', '!=', 'deleted')->get();

        $result = $this->generate_response($event, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
