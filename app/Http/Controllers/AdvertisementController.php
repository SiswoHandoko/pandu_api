<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\Advertisement;
class AdvertisementController extends Controller
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

        $advertisement = Advertisement::where('status','!=','deleted')
            ->where('title', 'LIKE', '%'.$search_query.'%')
            ->orderBy($order_by, $order_type)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $result = $this->generate_response($advertisement,200,'All Data.',false);

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
          'image_url' => 'max:2048',
          'title' => 'required|max:255',
          'caption' => 'required|max:255',
          'type' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($advertisement,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $advertisement = new Advertisement();
            /* upload process */
            $advertisement->image_url = $req->has('image_url') ? $this->uploadFile($this->public_path(). "/images/advertisements/", $req->image_url) : 'default_advertisement.png';
            $advertisement->title = $req->has('title') ? $req->title : '';
            $advertisement->caption = $req->has('caption') ? $req->caption : '';
            $advertisement->type = $req->has('type') ? $req->type : '';
            $advertisement->status = 'active';
            $advertisement->save();
            $result = $this->generate_response($advertisement,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advertisement = Advertisement::where('status','!=','deleted')->find($id);
        if(!$advertisement){
            $result = $this->generate_response($advertisement, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($advertisement, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
          'image_url' => 'max:2048',
          'title' => 'required|max:255',
          'caption' => 'required|max:255',
          'type' => 'required|max:255',
          'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($advertisement,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $advertisement = Advertisement::find($id);
            if(!$advertisement){
                $result = $this->generate_response($advertisement, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                /* upload process */
                $advertisement->image_url = $req->has('image_url') ? $this->uploadFile($this->public_path(). "/images/advertisements/", $req->image_url, $advertisement->image_url) :  $advertisement->image_url;
                $advertisement->title = $req->has('title') ? $req->title : $advertisement->title;
                $advertisement->caption = $req->has('caption') ? $req->caption : $advertisement->title;
                $advertisement->type = $req->has('type') ? $req->type : $advertisement->title;
                $advertisement->status = 'active';
                $advertisement->save();
                $result = $this->generate_response($advertisement,200,'Data Has Been Saved.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::find($id);
        if(!$advertisement){
            $result = $this->generate_response($advertisement, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $advertisement->status = 'deleted';
            $advertisement->save();
            $result = $this->generate_response($advertisement,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

}
