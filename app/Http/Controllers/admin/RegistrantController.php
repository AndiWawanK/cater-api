<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use App\Models\Merchant;
use DB;

class RegistrantController extends Controller
{
    public function show(){
        $data = Merchant::with('user_detail')
                    ->where('status', 0)
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('admin.pages.registrant', ['data' => $data]);
    }
    public function registered(Request $request){
        $data = Merchant::with('user_detail')
                    ->where('status', 1)
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('admin.pages.merchant_registered', ['data' => $data]);
    }
    public function verificationRegistrant(Request $request){
        $merchantId = $request->merchantId;
        DB::beginTransaction();
        try{
            $update = Merchant::where('id', $merchantId)
                    ->update(['status' => 1]);
            DB::commit();
            return redirect('/dashboard/registrant');
        }catch(Exception $e){
            DB::rollback();
            return redirect('/dashboard/registrant');
        }
    }
    public function disableAccountRegistrant(Request $request){
        $merchantId = $request->merchantId;
        DB::beginTransaction();
        try{
            $update = Merchant::where('id', $merchantId)
                    ->update(['status' => 0]);
            DB::commit();
            return redirect('/dashboard/registrant');
        }catch(Exception $e){
            DB::rollback();
            return redirect('/dashboard/registrant');
        }
    }
    public function customer(Request $request){
        $data = User::get();
        return view('admin.pages.customer', ['data' => $data]);
    }
}
