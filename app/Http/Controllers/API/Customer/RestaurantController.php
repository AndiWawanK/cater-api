<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Food;

class RestaurantController extends Controller
{
    public function showRecomendation(Request $request){
        $recomended = Merchant::with('packet')->get();

        return response()->json($recomended);
    }   
    public function showPacketMenu(Request $request){
        $packet = Food::where('product_id', $request->packetId)->get();
        return response()->json($packet);
    }
}
