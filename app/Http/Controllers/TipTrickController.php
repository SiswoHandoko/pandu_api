<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Model\TipTrick;

class TipTrickController extends Controller
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
        $tiptrick = TipTrick::where('status','!=','deleted')->get();
        $result = $this->generate_response($tiptrick,200,'All Data.',false);
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
          'title' => 'required|max:255',
          'description' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tiptrick,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $tiptrick = new TipTrick();
            $tiptrick->title = $req->has('title') ? $req->title : '';
            $tiptrick->description = $req->has('description') ? $req->description : '';
            $tiptrick->status = 'active';
            $tiptrick->save();
            $result = $this->generate_response($tiptrick,200,'Data Has Been Saved.',false);

            return response()->json($result, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiptrick = TipTrick::where('status','!=','deleted')->find($id);
        if(!$tiptrick){
            $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $result = $this->generate_response($tiptrick, 200, 'Detail Data.', false);
            return response()->json($result, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req,$id)
    {
        /* Validation */
        $validator = Validator::make($req->all(), [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($tiptrick,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $tiptrick = TipTrick::find($id);
            if(!$tiptrick){
                $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $tiptrick->title = $req->has('title') ? $req->title : $tiptrick->title;
                $tiptrick->description = $req->has('description') ? $req->description : $tiptrick->description;
                $tiptrick->status = $req->has('status') ? $req->status : $tiptrick->status;
                $tiptrick->save();
                $result = $this->generate_response($tiptrick,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipTrick  $tiptrick
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiptrick = TipTrick::find($id);
        if(!$tiptrick){
            $result = $this->generate_response($tiptrick, 404, 'Data Not Found.', true);
            return response()->json($result, 404);
        }else{
            $tiptrick->status = 'deleted';
            $tiptrick->save();
            $result = $this->generate_response($tiptrick,200,'Data Has Been Deleted.',false);
            return response()->json($result, 200);
        }
    }

}
