<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function successResponse($message, $code = 200){
        return response()->json($message, $code);
    }
    public function errorResponse($message, $code = 500){
        return response()->json([
            'error' => $message
        ], $code);
    }
}
