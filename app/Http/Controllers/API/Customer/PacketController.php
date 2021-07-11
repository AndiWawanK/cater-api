<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Packet;
use App\Models\Merchant;

class PacketController extends Controller
{
    // public function banner(Request $request){
    //     $_DEFAULT_LIMIT_QUERY = 5;
    //     $limit = $request->input('limit') ? : $_DEFAULT_LIMIT_QUERY;

    //     $banner = Banner::skip(0)
    //                     ->take($limit)
    //                     ->get();

    //     return response()->json($banner, 200);
    // }

    public function getPacketDiscount(Request $request){
        // $discount = Packet::with('merchant_detail')->where('discount', '!=', 0)->get();
        $discount = Merchant::with(['packet' => function($query){
            $query->where([
                ['status', '=', 1],
                ['discount', '!=', 0]
            ]);
            // $query->where('discount', '!=' 0);
        }])->where('status', 1)->get();
        return response()->json($discount);
    }
}
