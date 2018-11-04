<?php

namespace App\Traits;
use Illuminate\Http\Response;

trait ApiResponser
{
  /**
   * Construye respuesta con status 200
   */
  public function successResponse($data, $code = Response::HTTP_OK){

      return response()->json(['data'=>$data], $code);
  }
  public function errorResponse($message, $code){
    
      return  response()->json(['error'=>$mssage, 'code'=>$code], $code);
  }

}