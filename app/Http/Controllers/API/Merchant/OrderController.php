<?php

namespace App\Http\Controllers\API\Merchant;

use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Merchant;

class OrderController extends Controller
{
    public function getIncomingOrder(Request $request){
        $userId = $request->user()->id;
        
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $orders = Order::with('customer', 'packet', 'packet.menu')->where('merchant_id', $merchant->id)->get();

        return response()->json($orders);
    }

    public function getOrderInProgress(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $orders = Order::with('customer', 'packet', 'packet.menu')
                        ->where('merchant_id', $merchant->id)
                        ->where('status', 'accepted')
                        ->get();
        return response()->json($orders);
    }

    public function acceptIncomingOrder(Request $request){
        DB::beginTransaction();
        try{
            $accept = Order::where('id', $request->orderId)->update(['status' => 'accepted']);
            DB::commit();
            return response()->json(['message' => true], 200);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
    }
}
