<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function success($message, $data = [])
    {
        return response()->json([
           'status' => true,
           'message' => $message,
           'data' => $data
        ]);
    }

    public function error($message, $data = [])
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ]);
    }
}
