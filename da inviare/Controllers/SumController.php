<?php

//include_once '././app/Http/Controllers/Sum.php'

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller{

    public function calc_somma(Request $request){ 
        $somma = $request->valA + $request->valB;
        return view('result',compact('somma'));
    }
}

