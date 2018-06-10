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
        'category_id',
        'name',
        'description',
        'adult_price',
        'child_price',
        'infant_price',
        'tourist_price',
        'longitude',
        'latitude',
        'facilities',
        'rate',
        'website',
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
        // $param_insert = array(
        //     'name' => 'tourismplace_index',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $tourismplace = new TourismPlace;
        $tourismplace = $tourismplace->with('city.province', 'picture', 'event', 'category');
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

                // $this->update_access_log($access_log_id, $result);
                
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

                // $this->update_access_log($access_log_id, $result);

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

        if ($req->input('latitude') && $req->input('longitude')) {
            $tourismplace = $this->sort_distance($tourismplace, $req->input('latitude'), $req->input('longitude'));
        }

        $result = $this->generate_response($tourismplace, 200, 'All Data.', false);

        // $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    private function sort_distance($tourismplace, $latitude, $longitude)
    {
        $arr_distance = array();

        foreach ($tourismplace as $key => $value) {
            $distance = $this->haversineGreatCircleDistance($latitude, $longitude, $value->latitude, $value->longitude);
            $tourismplace[$key]['distance'] = $distance;
            $arr_distance[$key] = $distance;
        }

        $result = $this->array_msort($tourismplace, array('distance'=>SORT_ASC));

        $result = array_values($result);

        return $result;
    }

    private function array_msort($array, $cols)
    {
        $colarr = array();

        foreach ($cols as $col => $order) {
            $colarr[$col] = array();
            foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
        }

        $eval = 'array_multisort(';

        foreach ($cols as $col => $order) {
            $eval .= '$colarr[\''.$col.'\'],'.$order.',';
        }

        $eval = substr($eval,0,-1).');';
        eval($eval);
        $ret = array();
        
        foreach ($colarr as $col => $arr) {
            foreach ($arr as $k => $v) {
                $k = substr($k,1);
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                $ret[$k][$col] = $array[$k][$col];
            }
        }

        return $ret;
    }

    private function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        
        return $angle * $earthRadius;
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
            'name' => 'tourismplace_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

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
            'rate' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

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
            $tourismplace->rate = $req->has('rate') ? $req->rate : 0;
            $tourismplace->status = $req->has('status') ? $req->status : 'active';
            $tourismplace->address = $req->has('address') ? $req->address : '';
            $tourismplace->phone = $req->has('phone') ? $req->phone : '';
            $tourismplace->category_id = $req->has('category_id') ? $req->category_id : '';
            $tourismplace->website = $req->has('website') ? $req->website : '';

            $tourismplace->save();

            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Saved.', false);

            $this->update_access_log($access_log_id, $result);

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
        // $param_insert = array(
        //     'name' => 'tourismplace_show',
        //     'params' => '',
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $tourismplace = TourismPlace::with('city.province', 'picture', 'event','category')->where('status', '!=', 'deleted')->find($id);
        
        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($tourismplace, 200, 'Detail Data.', false);

            // $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'tourismplace_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

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
            'rate' => 'required'
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tourismplace, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

            if (!$tourismplace) {
                $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

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
                $tourismplace->rate = $req->has('rate') ? $req->rate : $tourismplace->rate;
                $tourismplace->status = $req->has('status') ? $req->status : $tourismplace->status;
                $tourismplace->address = $req->has('address') ? $req->address : $tourismplace->address;
                $tourismplace->phone = $req->has('phone') ? $req->phone : $tourismplace->phone;
                $tourismplace->category_id = $req->has('category_id') ? $req->category_id : $tourismplace->category_id;
                $tourismplace->status = $req->has('status') ? $req->status : $tourismplace->status;
                $tourismplace->website = $req->has('website') ? $req->website : $tourismplace->website;

                $tourismplace->save();

                $result = $this->generate_response($tourismplace, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

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
        $param_insert = array(
            'name' => 'tourismplace_destroy',
            'params' => json_encode(array("id" => $id)),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $tourismplace = TourismPlace::where('status', '!=', 'deleted')->find($id);

        if (!$tourismplace) {
            $result = $this->generate_response($tourismplace, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $tourismplace->status = 'deleted';
            
            $tourismplace->save();
            
            $result = $this->generate_response($tourismplace, 200, 'Data Has Been Deleted.', false);

            $this->update_access_log($access_log_id, $result);

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
        // $param_insert = array(
        //     'name' => 'event_by_tourismplace',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $event = new Event;
        $event = $event->with('tourismplace','tourismplace.category');
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

                // $this->update_access_log($access_log_id, $result);

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

                // $this->update_access_log($access_log_id, $result);

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

        // $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function picture_by_tourismplace(Request $req, $id)
    {
        // $param_insert = array(
        //     'name' => 'picture_by_tourismplace',
        //     'params' => json_encode(collect($req)->toArray()),
        //     'result' => ''
        // );

        // $access_log_id = $this->create_access_log($param_insert);

        $picture = new Picture;
        $picture = $picture->with('tourismplace','tourismplace.category');
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

                // $this->update_access_log($access_log_id, $result);

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

                // $this->update_access_log($access_log_id, $result);

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

        $this->update_access_log($access_log_id, $result);

        return response()->json($result, 200);
    }
}
