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
            return response()->json($userValidator->errors(), 400);
        }

        $user = User::where(['email' => $request->input('email')])->first();
        if(!$user){
            return response()->json(['message' => 'No active account found with the given credentials!'], 404);
        }elseif(!Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Wrong password!'], 401);
        }

        if($user->tokens()->where('name', $request->input('email'))->first()) {
            $user->tokens()->where('tokenable_id', $user->id)->delete();
        }

        $token = $user->createToken($request->input('email'))->plainTextToken;

        return response()->json([
            'status_code' => 200,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    public function forgotPassword(Request $request){
        $emailValidator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

        if($emailValidator->fails()){
            return response()->json($emailValidator->errors(), 400);
        }

        $email = User::where(['email' => $request->input('email')])->exists();

        if(!$email){
            return response()->json([
                'email' => $email,
                'message' => 'Your email is not registered.'
            ], 400);
        }

        return response()->json(['email' => $email], 200);
    }

    public function newPassword(Request $request){
        $dataValidator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($dataValidator->fails()){
            return response()->json($dataValidator->errors(), 400);
        }

        DB::BeginTransaction();
        try{
            $update = User::where(['email' => $request->input('email')])
                        ->update(['password' => Hash::make($request->input('password'))]);

            return response()->json(['message' => true], 200);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
    }
}


