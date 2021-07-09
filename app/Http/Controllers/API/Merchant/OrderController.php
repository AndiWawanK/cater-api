<?php

namespace App\Http\Controllers\API\Merchant;

use Illuminate\Support\Facades\Storage;
use DB;
use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Merchant;
use App\Models\Packet;
use App\Models\PacketMenu;

class OrderController extends Controller
{
    public function getIncomingOrder(Request $request){
        $userId = $request->user()->id;
        
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $orders = Order::with('customer', 'packet', 'packet.menu')
                    ->where('merchant_id', $merchant->id)
                    ->where('status', 'placed')
                    ->get();

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

    public function createPacket(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $folderName = str_replace(' ', '', strtolower($merchant->merchant_name));


        $dataValidator = Validator::make($request->all(), [
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'packet_name' => 'required',
            'packet_price' => 'required'
        ]);
        if($dataValidator->fails()){
            return response()->json($dataValidator->errors(), 400);
        }

        if($file = $request->file('banner')){
            $path = $file->store('public/merchants/'.$folderName.'/');
            $name = $file->getClientOriginalName();
            
            $save = new Packet();
            $save->merchant_id = $merchant->id;
            $save->name = $request->input('packet_name');
            $save->price = $request->input('packet_price');
            $save->discount = $request->input('discount');
            $save->description = $request->input('description');
            $save->thumbnail= $path;
            $save->save();

            return response()->json(['message' => true], 201);
        }
    }
    
    public function createPacketMenu(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $folderName = str_replace(' ', '', strtolower($merchant->merchant_name));

        $dataValidator = Validator::make($request->all(), [
            'packet_id' => 'required',
            'menu_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'description' => 'required',
        ]);

        if($dataValidator->fails()){
            return response()->json($dataValidator->errors(), 400);
        }

        if($file = $request->file('image')){
            $path = $file->store('public/merchants/'.$folderName.'/menu/');
            $name = $file->getClientOriginalName();

            DB::beginTransaction();
            try{
                $create = PacketMenu::create([
                    'product_id' => $request->input('packet_id'),
                    'food_name' => $request->input('menu_name'),
                    'image' => $path,
                    'description' => $request->input('description')
                ]);
                DB::commit();
                return response()->json($create);
            }catch(Exception $e){
                DB::rollback();
                return response()->json(['error' => $e], 400);
            }
        }

    }
}
