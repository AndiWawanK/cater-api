<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;

class ProductController extends Controller
{
    public function banner(Request $request){
        $_DEFAULT_LIMIT_QUERY = 5;
        $limit = $request->input('limit') ? : $_DEFAULT_LIMIT_QUERY;

        $banner = Banner::skip(0)
                        ->take($limit)
                        ->get();

        return response()->json($banner, 200);
    }

    public function show(Request $request){
        $categoryId = $request->input('category');
        if($categoryId == 1){
            // $nearby = Product::where('')
            return response()->json([], 200);
        }elseif($categoryId == 2){
            $promo = Product::where('discount', '>', 0)->where('discount', '!=', null)->get();
            return response()->json($promo, 200);
        }
    }
}
