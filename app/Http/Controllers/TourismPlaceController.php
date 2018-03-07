<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\TourismPlace;
use App\Model\Event;
use App\Model\Picture;

class TourismPlaceController extends Controller
{
    private $fields_tourismplaces = array(
        'id',
        'city_id',
        'name',
        'description',
        'adult_price',
        'child_price',
        'infant_price',
        'tourist_price',
        'longitude',
        'latitude',
        'facilities',
        'status'
    );

    private $fields_events = array(
        'id',
        'tourism_place_id',
        'name',
        'description',
        'start_date',
        'end_date',
        'status'
    );

    private $fields_pictures = array(
        'id',
        'tourism_place_id',
        'image_url',
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
        $tourismplace = new TourismPlace;
        $tourismplace = $tourismplace->with('city.province', 'picture', 'event');
        $tourismplace = $tourismplace->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $tourismplace = $tourismplace->where('name', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_tourismplaces))) {
                foreach ($explode_by as $key => $value) {
                    $tourismplace = $tourismplace->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_tourismplaces)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $tourismplace = $tourismplace->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $tourismplace = $tourismplace->offset($offset);
            $tourismplace = $tourismplace->limit($req->input('limit'));
        }

        $tourismplace = $tourismplace->get();

        $result = $this->generate_response($tourismplace, 200, 'All Data.', false);

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
            'city_id' => 'required|min:0',
            'name' => 'required|max:255',
            'adult_price' => 'required|min:0',
            'child_price' => 'required|min:0',
            'infant_price' => 'required|min:0',
            'tourist_price' => 'required|min:0',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = new TourismPlace();

            $tourismplace->city_id = $req->has('city_id') ? $req->city_id : 0;
            $tourismplace->name = $req->has('name') ? $req->name : '';
            $tourismplace->description = $req->has('description') ? $req->description : '';
            $tourismplace->adult_price = $req->has('adult_price') ? $req->adult_price : 0;
            $tourismplace->child_price = $req->has('child_price') ? $req->child_price : 0;
            $tourismplace->infant_price = $req->has('infant_price') ? $req->infant_price : 0;
            $tourismplace->tourist_price = $req->has('tourist_price') ? $req->tourist_price : 0;
            $tourismplace->longitude = $req->has('longitude') ? $req->longitude : '';
            $tourismplace->latitude = $req->has('latitude') ? $req->latitude : '';
            $tourismplace->facilities = $req->has('facilities') ? $req->facilities : '';
            $tourismplace->status = 'active';

            $tourismplace->save();

            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Saved.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourismplace = TourismPlace::with('city.province', 'picture', 'event')->where('status', '!=', 'deleted')->find($id);
        
        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($tourismplace, 200, 'Detail Data.', false);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'city_id' => 'required|min:0',
            'name' => 'required|max:255',
            'adult_price' => 'required|min:0',
            'child_price' => 'required|min:0',
            'infant_price' => 'required|min:0',
            'tourist_price' => 'required|min:0',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);


        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

            if (!$tourismplace) {
                $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

                return response()->json($result, 404);
            } else {
                $tourismplace->city_id = $req->has('city_id') ? $req->city_id : $tourismplace->city_id;
                $tourismplace->name = $req->has('name') ? $req->name : $tourismplace->name;
                $tourismplace->description = $req->has('description') ? $req->description : $tourismplace->description;
                $tourismplace->adult_price = $req->has('adult_price') ? $req->adult_price : $tourismplace->adult_price;
                $tourismplace->child_price = $req->has('child_price') ? $req->child_price : $tourismplace->child_price;
                $tourismplace->infant_price = $req->has('infant_price') ? $req->infant_price : $tourismplace->infant_price;
                $tourismplace->tourist_price = $req->has('tourist_price') ? $req->tourist_price : $tourismplace->tourist_price;
                $tourismplace->longitude = $req->has('longitude') ? $req->longitude : $tourismplace->longitude;
                $tourismplace->latitude = $req->has('latitude') ? $req->latitude : $tourismplace->latitude;
                $tourismplace->facilities = $req->has('facilities') ? $req->facilities : $tourismplace->facilities;

                $tourismplace->save();

                $result = $this->generate_response($tourismplace, 200, 'Data Has Been Updated.', false);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourismPlace  $tourismplace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $tourismplace->status = 'deleted';
            
            $tourismplace->save();
            
            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Deleted.', false);

            return response()->json($result, 200);
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function event_by_tourismplace(Request $req, $id)
    {
        $event = new Event;
        $event = $event->with('tourismplace');
        $event = $event->where('tourism_place_id', $id);
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
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function picture_by_tourismplace(Request $req, $id)
    {
        $picture = new Picture;
        $picture = $picture->with('tourismplace');
        $picture = $picture->where('tourism_place_id', $id);
        $picture = $picture->where('status', '!=', 'deleted');

        // search query
        if ($req->input('search_query')) {
            $search_query = $req->input('search_query') ? $req->input('search_query') : '';

            $picture = $picture->where('image_url', 'LIKE', '%'.$search_query.'%');
        }

        // where custom
        if ($req->input('where_by') && $req->input('where_value')) {
            $explode_by = explode('|', $req->input('where_by'));
            $explode_value = explode('|', $req->input('where_value'));

            if ((count($explode_by)==count($explode_value)) && ($this->check_where($explode_by, $this->fields_pictures))) {
                foreach ($explode_by as $key => $value) {
                    $picture = $picture->where($explode_by[$key], '=', $explode_value[$key]);
                }
            } else {
                $result = $this->generate_response($picture, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // order
        if ($req->input('order_by')) {
            if (in_array($req->input('order_by'), $this->fields_pictures)) {
                $order_type = $req->input('order_type') ? $req->input('order_type') : 'asc';

                $picture = $picture->orderBy($req->input('order_by'), $order_type);
            } else {
                $result = $this->generate_response($picture, 400, 'Bad Request.', true);

                return response()->json($result, 400);
            }
        }

        // limit
        if ($req->input('limit')) {
            $offset = $req->input('offset') ? $req->input('offset') : 0;

            $picture = $picture->offset($offset);
            $picture = $picture->limit($req->input('limit'));
        }

        $picture = $picture->get();

        $result = $this->generate_response($picture, 200, 'All Data.', false);

        return response()->json($result, 200);
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
