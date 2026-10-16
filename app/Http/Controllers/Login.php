<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => $request
            ], 200, [
                'Content-Type' => 'application/json'
        ]);;
    }
}
