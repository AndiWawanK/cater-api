<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Food;
use App\Models\Packet;
use App\Models\Days;

class RestaurantController extends Controller
{ 

    //TODO
    // Ambil data paket berdasarkan hari dan jam makan
    // Ambil data merchant yang statusnya 1 dan paket statusnya 1 juga => done
    public function showRecomendation(Request $request){
        $recomended = Merchant::with(['packet' => function($query){
            $query->where('status', 1);
        }])->where('status', 1)->get();

        return response()->json($recomended);
    }   
    public function showPacketMenu(Request $request){
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
}
