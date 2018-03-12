<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // $validator = $this->validate($request->all(),['email' => 'required|email']);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'data' => $validator->errors(),
            ], 500);
        }

        if (Auth::attempt($request->all(),true)) {
            $user = Auth::user();
            $user->generateToken();

            return response()->json([
                'data' => $user->toArray(),
            ]);
        }

        return $this->sendFailedLoginResponse($request);
    }
}
