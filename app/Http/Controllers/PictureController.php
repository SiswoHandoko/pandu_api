<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\Picture;

class PictureController extends Controller
{
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
        $param_insert = array(
            'name' => 'picture_index',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $picture = new Picture;
        $picture = $picture->with('tourismplace');
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

                $this->update_access_log($access_log_id, $result);
                
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

                $this->update_access_log($access_log_id, $result);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $param_insert = array(
            'name' => 'picture_store',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'tourism_place_id' => 'required|min:0',
            'image_url' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($picture, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $arr_picture = array();
            
            $image_url = $req->has('image_url') ? $req->image_url : array();
            
            foreach ($req->image_url as $key => $value) {
                $picture = new Picture();

                $picture->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
                $picture->image_url = $value ? env('BACKEND_URL').'public/images/places/'.$this->uploadFile($this->public_path(). "/images/places/", $value) : env('BACKEND_URL').'public/images/places/default_img.png';
                $picture->status = $req->has('status') ? $req->status : 'active';

                $picture->save();

                $arr_picture[] = $picture;
            }
            
            $result = $this->generate_response($arr_picture, 200, 'Data Has Been Saved.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $param_insert = array(
            'name' => 'picture_show',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $picture = Picture::with('tourismplace')->where('status', '!=', 'deleted')->find($id);
        
        if (!$picture) {
            $result = $this->generate_response($picture, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $result = $this->generate_response($picture, 200, 'Detail Data.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        $param_insert = array(
            'name' => 'picture_update',
            'params' => json_encode(collect($req)->toArray()),
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        /* Validation */
        $validator = Validator::make($req->all(), [
            'image_url' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($picture, 400, 'Bad Request.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 400);
        }else{
            $picture = Picture::where('status', '!=', 'deleted')->find($id);

            if (!$picture) {
                $result = $this->generate_response($picture, 404, 'Data Not Found.', true);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 404);
            } else {
                $picture->image_url = $req->has('image_url') ? env('BACKEND_URL').'public/images/places/'.$this->uploadFile($this->public_path(). "/images/places/", $req->image_url, $picture->image_url) : $picture->image_url;
                $picture->status = $req->has('status') ? $req->status : $picture->status;
                
                $picture->save();

                $result = $this->generate_response($picture, 200, 'Data Has Been Updated.', false);

                $this->update_access_log($access_log_id, $result);

                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $param_insert = array(
            'name' => 'picture_destroy',
            'params' => '',
            'result' => ''
        );

        $access_log_id = $this->create_access_log($param_insert);

        $picture = Picture::where('status', '!=', 'deleted')->find($id);

        if (!$picture) {
            $result = $this->generate_response($picture, 404, 'Data Not Found.', true);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 404);
        } else {
            $picture->status = 'deleted';
        
            $picture->save();
            
            $result = $this->generate_response($picture, 200, 'Data Has Been Deleted.', false);

            $this->update_access_log($access_log_id, $result);

            return response()->json($result, 200);
        }
    }
}
