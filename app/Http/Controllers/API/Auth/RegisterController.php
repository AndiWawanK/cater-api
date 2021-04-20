<?php

namespace App\Http\Controllers\API\Auth;
use Validator;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(Request $request){
        $userValidator = Validator::make($request->all(), [
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        if($userValidator->fails()){
            return response()->json($userValidator->errors(),400);
        }

        DB::beginTransaction();
        try{
            $user = User::create([
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'role' => $request->input('role'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);
            DB::commit();
            return response()->json($user, 201);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
        

    }
}
