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

        $coin->save();

        return response()->json(['success' => 'Coin has been added'], 200);
    }
}
