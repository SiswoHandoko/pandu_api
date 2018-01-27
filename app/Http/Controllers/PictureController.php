<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Model\Picture;
use App\Model\City;

class PictureController extends Controller
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
        $picture = Picture::with('tourismplace')->get();

        $result = $this->generate_response($picture, 200, 'All Data.', false);

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
            'image_url' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($picture, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $arr_picture = array();
            
            $image_url = $req->has('image_url') ? $req->image_url : array();
            
            foreach ($req->image_url as $key => $value) {
                $picture = new Picture();

                $picture->tourism_place_id = $req->has('tourism_place_id') ? $req->tourism_place_id : 0;
                $picture->image_url = $value ? $value : '';
                $picture->status = 'active';

                $picture->save();

                $arr_picture[] = $picture;
            }
            
            $result = $this->generate_response($arr_picture, 200, 'Data Has Been Saved.', false);

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
        $picture = Picture::with('tourismplace')->find($id);
        
        if (!$picture) {
            $picture = array();
        }

        $result = $this->generate_response($picture, 200, 'Detail Data.', false);

        return response()->json($result, 200);
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
        /* Validation */
        $validator = Validator::make($req->all(), [
            'image_url' => 'required',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($picture, 400, 'Bad Request.', true);

            return response()->json($result, 400);
        }else{
            $picture = Picture::find($id);

            $picture->image_url = $req->has('image_url') ? $req->image_url : '';
            
            $picture->save();

            $result = $this->generate_response($picture, 200, 'Data Has Been Updated.', false);

            return response()->json($result, 200);
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
        $picture = Picture::find($id);

        $picture->status = 'deleted';
        
        $picture->save();
        
        $result = $this->generate_response($picture, 200, 'Data Has Been Deleted.', false);

        return response()->json($result, 200);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function picture_by_tourismplace($id)
    {
        $picture = Picture::where('tourism_place_id', $id)->get();

        $result = $this->generate_response($picture, 200, 'All Data.', false);

        return response()->json($result, 200);
    }
}
