<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;

class CustomController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_status(Request $req, $id)
    {
        $tables = $this->get_table();
        /* Validation */
        $validator = Validator::make($req->all(), [
          'table' => 'required|max:255|in:'.$tables,
          'field' => 'required|max:255|in:status',
          'status' => 'required|max:255',
        ]);

        if($validator->fails()) {
            $result = $this->generate_response($update,400,'Bad Request.',true);
            return response()->json($result, 400);
        }else{
            $modeldir   = "App\Model\ ";
            $modelname  = ucfirst(rtrim($req->table,'s'));
            $model      = trim($modeldir).$modelname;

            $update = $model::find($id);
            if(!$update){
                $result = $this->generate_response($update, 404, 'Data Not Found.', true);
                return response()->json($result, 404);
            }else{
                $update->status = $req->has('status') ? $req->status : '';
                $update->save();
                $result = $this->generate_response($update,200,'Data Has Been Updated.',false);
                return response()->json($result, 200);
            }
        }
    }

}
