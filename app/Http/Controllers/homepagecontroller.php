<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class homepagecontroller extends Controller
{
    //

    public function setData(Request $request)
    {

        $prod_id = $request->dataid;
        $quantity = 1;
        $pro_name = $request->dataname;
        $pro_img = $request->dataimg;
        $pro_price = $request->dataprice;
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            // print_r($cart_data);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 4320;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>"Already Added to Cart"]);
                }
            }
        }
            $item_array = array(
                'item_id' => $request->dataid,
                'item_name' =>$request->dataname,
                'item_quantity' =>1,
                'item_price' => $request->dataprice,
                'item_image' =>$request->dataimg,

            );
            $cart_data[] = $item_array;
            $item_data = json_encode($cart_data);
            $count=count($cart_data);
            // dd($count);
            $minutes = 1;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['status'=>" Added to Cart",'data'=>$cart_data,'count'=>$count]);
        }
}
