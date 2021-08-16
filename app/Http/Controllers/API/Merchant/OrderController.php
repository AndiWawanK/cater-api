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
use App\Models\Days;
use App\Models\Food;

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
            $path = $file->store('public/merchants/'.$folderName);
            $name = $file->getClientOriginalName();
            
            $save = new Packet();
            $save->merchant_id = $merchant->id;
            $save->name = $request->input('packet_name');
            $save->price = $request->input('packet_price');
            $save->discount = $request->input('discount');
            $save->description = $request->input('description');
            $save->thumbnail= Storage::url($path);
            $save->save();

            return response()->json(['message' => true], 201);
        }
    }

    public function updatePacket(Request $request){
        $folderName = str_replace(' ', '', strtolower($request->merchant_name));
	DB::beginTransaction();
	try {
	    $packet = Packet::where('id', $request->packetId)->firstOrFail();
	    if($request->hasFile('banner')){
		$file = $request->file('banner');
		$path = $file->store('public/merchants/'.$folderName);
		$name = $file->getClientOriginalName();
		$packet->update([
		    'thumbnail' => Storage::url($path)
	    	]);
	    }

	    $packet->update([
	    	'name'      	=> $request->input('packet_name'),
	    	'price'     	=> $request->input('packet_price'),
		'discount'  	=> $request->input('discount'),
		'description'	=> $request->input('description')
	   ]);
	   DB::commit();

	   return response()->json([
	       'data' => $packet,
               'message' => 'success',
	   ], 200);
	    
	
	}catch(Exception $e){
	    DB::rollback();
            return response()->json(['error' => $e], 400);
	}
    
    }
    
    public function showMyPacket(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();

        $packets = Packet::where('merchant_id', $merchant->id)->get();
        return response()->json($packets);
    }

    public function createPacketMenu(Request $request){
        $userId = $request->user()->id;
        $merchant = Merchant::where('user_id', $userId)->firstOrFail();
        $folderName = str_replace(' ', '', strtolower($merchant->merchant_name));

        $dataValidator = Validator::make($request->all(), [
            'packet_id' => 'required',
            'day_id' => 'required',
            'eating_time_id' => 'required',
            'menu_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'description' => 'required',
        ]);

        if($dataValidator->fails()){
            return response()->json($dataValidator->errors(), 400);
        }

        if($file = $request->file('image')){
            $path = $file->store('public/merchants/'.$folderName.'/menu');
            $name = $file->getClientOriginalName();

            DB::beginTransaction();
            try{
                $create = PacketMenu::create([
                    'product_id' => $request->input('packet_id'),
                    'day_id' => $request->input('day_id'),
                    'eating_time_id' => $request->input('eating_time_id'),
                    'food_name' => $request->input('food_name'),
                    'image' => Storage::url($path),
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
    
    public function getPacketMenu(Request $request){
        $packets = Food::with(['days','eat_time'])->where('product_id', $request->packetId)->get();
        $days = Days::get();
        $result = [];
        foreach($days as $key => $day){
            $result[$key]['day'] = $day->name;
            $result[$key]['menu'] = [];
            foreach($packets as $idx => $packet){
                $packets[$idx]->eating_time = $packet->eat_time->time;
                $packets[$idx]->day = $packet->days->name;
                unset($packets[$idx]->eat_time);
                unset($packets[$idx]->days);
                if($packet->day_id === $day->id){
                    array_push($result[$key]['menu'], $packet);
                }
            }
        }
        return response()->json($result);
    }

    public function enablePacket(Request $request){
        DB::beginTransaction();
        try{
            $update = Packet::where('id', $request->packetId)
                            ->update(['status' => 1]);
            DB::commit();
            return response()->json(["message" => 'Enjoy']);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
    }

    public function disablePacket(Request $request){
        DB::beginTransaction();
        try{
            $update = Packet::where('id', $request->packetId)
                            ->update(['status' => 0]);
            DB::commit();
            return response()->json(["message" => 'Aishh']);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error' => $e], 400);
        }
    }
}
