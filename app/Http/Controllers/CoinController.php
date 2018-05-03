<?php

namespace App\Http\Controllers;

use App\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function store(Request $request){
        $coin = new Coin;
        $coin->name = $request->name;
        $coin->year = $request->year;
        $coin->price = $request->price;
        $coin->coupon = $request->coupon ? $request->coupon : 'no coupon';

        $coin->save();

        return response()->json(['success' => 'Coin has been added'], 200);
    }

    public  function index(){
        $coins = Coin::get();
        return response()->json($coins);


    }
}
