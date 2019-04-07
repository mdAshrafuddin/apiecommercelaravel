<?php

namespace App\Exceptions;

// use Exception;

use App\Exceptions\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
   
    public function apiExceptions($request,$e)
    {
        if($this->isModel($e)){
            return $this->ModelResponse($e);
        }

        if($this->isHttp($e)){
            return $this->Httpresponse($e); 
        }

       // return parent::render($request, $exception);
    }
    //    dd($exception);

    protected function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function ModelResponse($e)
    {
       return response()->json([
            'errors' => 'model not found' 
        ],404);
    }

    protected function Httpresponse($e)
    {
        return response()->json([
            'errors' => 'Incorect route' 
        ],404);
    }

   
}
