<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request){
        return $request->user();
    }
    public function updateProfile(Request $request){
        $currentUserData = $request->user();

        $full_name = $request->input('full_name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $avatar = $request->file('avatar');
        
        if($file = $request->file('avatar')){
            $path = $file->store('public/user/avatar');
            DB::beginTransaction();
            try{
                
                $update = User::where('id', $currentUserData->id)
                                ->update([
                                    'full_name' => $full_name ? $full_name : $currentUserData->full_name,
                                    'phone' => $phone ? $phone : $currentUserData->phone,
                                    'email' => $email ? $email : $currentUserData->email,
                                    'password' => Hash::make($password),
                                    'avatar' => $avatar ? $path : ''
                                ]);
                DB::commit();
                return response()->json($update);

            }catch(Exception $e){
                DB::rollback();
                return response()->json(['error' => $e], 400);
            }
        }
    }
}
