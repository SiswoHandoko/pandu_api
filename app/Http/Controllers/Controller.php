<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  /**
  * For Generate custom response from api.
  *
  * @return \Illuminate\Http\Response
  */
  public function generate_response(&$params, $code, $message, $is_error)
  {
    if($is_error){
      $result['isError'] = true;
      $result['errorCode'] = $code;
      $result['message'] = $message;
      $result['data'] = $params;
    }else{
      $result['isError'] = false;
      $result['errorCode'] = $code;
      $result['message'] = $message;
      $result['data'] = $params;
    }

    return $result;
  }
}
