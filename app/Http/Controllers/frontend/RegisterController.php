<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Storage;
use DB;
use Validator;
use Redirect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.pages.registration', ['message' => null]);
    }
    public function handleRegister(Request $request){
        $dataValidator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'merchant_name' => 'required|unique:merchants',
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        if($dataValidator->fails()){
            return Redirect::to('/registration-merchant')->with('message', 'Mohon maaf!, Mohon periksa kembali form pendaftaran');
        }

        if($file = $request->file('avatar')){
            $path = $file->store('public/user/avatar');
            DB::beginTransaction();
            try{
                $create = User::create([
                    'full_name' => $request->input('full_name'),
                    'phone' => $request->input('phone'),
                    'role' => 'merchant',
                    'avatar' => Storage::url($path),
                    'address1' => $request->input('address1'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password'))
                ]);
                DB::commit();
                $this->createMerchantProfile($request, $create->id);
                return Redirect::to('/registration-merchant')->with('message', 'Pendaftaran Berhasil! Silahkan tunggu 1x24 jam untuk proses pengaktifan akun anda');
            }catch(Exception $e){
                DB::rollback();
                return response()->json(['error' => $e], 400);
            }
        }
    }
    public function createMerchantProfile($request, $userId){
        $folderName = str_replace(' ', '', strtolower($request->merchant_name));
        if($file = $request->file('banner')){
            $path = $file->store('public/merchants/banner'.$folderName);
            DB::beginTransaction();
            try{
                $create = Merchant::create([
                    'user_id' => $userId,
                    'merchant_name' => $request->input('merchant_name'),
                    'merchant_level' => 'basic',
                    'banner' => Storage::url($path),
                    'province_code' => 1,
                    'status' => 0,
                    'rating' => 0,
                    'description' => $request->input('description')
                ]);
                DB::commit();
            }catch(Exception $e){
                DB::rollback();
                return response()->json(['error' => $e], 400);
            }
        }
    }
}
