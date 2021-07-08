<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;

class RegistrantController extends Controller
{
    public function show(Request $request){
        if ($request->ajax()) {
            // $users = User::select('*');
            // return Datatables::of($users)->make(true);
            return datatables(User::all())->toJson();
        }
        return view('admin.pages.registrant');
    }
}
