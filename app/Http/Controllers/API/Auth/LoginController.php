<?php

namespace App\Http\Controllers\API\Auth;
use Validator;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function entry(Request $request){
        $userValidator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($userValidator->fails()){
            return response()->json(['message' => $userValidator], 400);
        }

        $user = User::where(['email' => $request->input('email')])->first();
        if(!$user){
            return response()->json(['message' => 'No active account found with the given credentials!'], 404);
        }elseif(!Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Wrong password!'], 401);
        }

        $token = $user->createToken('user-token')->plainTextToken;

        return response()->json([
            'id' => $user->id,
            'full_name' => $user->full_name,
            'email' => $user->email,
            'token' => $token
        ], 200);
    }
}
