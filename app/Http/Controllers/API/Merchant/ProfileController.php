<?php

namespace App\Http\Controllers\API\Merchant;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile(Request $request){
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
                                    'avatar' => $avatar ? Storage::url($path) : ''
                                ]);
                DB::commit();
                $updateUserData = User::where('id', $currentUserData->id)->get();
                return response()->json($updateUserData);

            }catch(Exception $e){
                DB::rollback();
                return response()->json(['error' => $e], 400);
            }
        }
    }

    public function showMerchantProfile(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        return response()->json($merchant);
    }

}
