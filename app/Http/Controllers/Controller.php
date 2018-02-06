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

  public function uploadFile($path, $base64,$last_image = ''){
      /* Upload function */
      $data = base64_decode($base64);
      $extension = $this->getImageMimeType($data);
      $filename = sha1(time()).".".$extension;
      $destinationPath = $path . $filename;
      if(file_put_contents($destinationPath, $data)){
          if($last_image!='' && $last_image != 'default_advertisement.png' && $last_image != 'default_place.png' && $last_image != 'default_img.png'){
              @unlink($path.$last_image);
          }
          return $filename;
      }else{
          return false;
      };
  }

  /**
  * Get Type File from base_64.
  *
  * @return \Illuminate\Http\Response
  */

  public function getImageMimeType($imagedata)
  {
      $imagemimetypes = array(
      "jpeg" => "FFD8",
      "png" => "89504E470D0A1A0A",
      "gif" => "474946",
      "bmp" => "424D",
      "tiff" => "4949",
      "tiff" => "4D4D"
      );

      foreach ($imagemimetypes as $mime => $hexbytes)
      {
          $bytes = $this->getBytesFromHexString($hexbytes);
          if (substr($imagedata, 0, strlen($bytes)) == $bytes)
          return $mime;
      }
      return NULL;
  }

  /**
  * Parse Type base_64 file.
  *
  * @return \Illuminate\Http\Response
  */

  public function getBytesFromHexString($hexdata)
  {
      for($count = 0; $count < strlen($hexdata); $count+=2)
      $bytes[] = chr(hexdec(substr($hexdata, $count, 2)));
      return implode($bytes);
  }

  /**
  * Access public path on lumen.
  *
  * @return \Illuminate\Http\Response
  */
  function public_path($path = null)
  {
      return rtrim(app()->basePath('public/' . $path), '/');
  }
}
