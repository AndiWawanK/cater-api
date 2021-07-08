<?php

namespace App\Http\Controllers\API\Customer;

use Validator;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderSummary;

class OrderController extends Controller
{
    public function createOrder(Request $request){
        $validate = Validator::make($request->all(), [
            'merchant_id' => 'required',
            'packet_id' => 'required',
            'note' => 'required',
            'total_price' => 'required',
            'start_at' => 'required',
            'ends_at' => 'required'
        ]);

        if($validate->fails()){
            return response()->json($userValidator->errors(), 400);
        }

        DB::beginTransaction();
        try{
            $create = Order::create([
                'customer_id' => $request->customerId,
                'merchant_id' => $request->input('merchant_id'),
                'product_id' => $request->input('packet_id'),
                'note' => $request->input('note'),
                'order_fee' => 2000,
                'total_price' => $request->input('total_price'),
                'status' => 'placed', // placed -> accepted -> on progress -> done
                'latitude' => $request->input('lat'),
                'longitude' => $request->input('long'),
                'address' => $request->input('address'),
                'portion' => $request->input('portion'),
                'subscription' => $request->input('subscription'),
                'start_at' => $request->input('start_at'),
                'ends_at' => $request->input('ends_at')
            ]);
            DB::commit();
            return response()->json([
                'message' => 'Order Anda Berhasil!',
            ], 201);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
    }

    public function orderProgress(Request $request){
        $progress = Order::with(['merchant', 'packet', 'packet.menu'])
                    ->where('customer_id', $request->customerId)
                    ->get();
        return response()->json($progress);
    }

    public function orderHistory(Request $request){
        $history = Order::with(['merchant', 'packet', 'packet.menu'])
                    ->where('customer_id', $request->customerId)
                    ->where('status', 'done')
                    ->get();
        return response()->json($history);
    }
}
