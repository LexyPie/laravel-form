<?php

//include_once '././app/Http/Controllers/Sum.php'

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller{

    public function calc_result(Request $request){ 
        
        if (isset($_POST['sum'])) {
        $def_result = $request->valA + $request->valB;
        return view('result',compact('def_result'));
        } elseif (isset($_POST['sub'])) {
            $def_result = $request->valA - $request->valB;
            return view('result',compact('def_result'));  
        } elseif (isset($_POST['mult'])) {
            $def_result = $request->valA * $request->valB;
            return view('result',compact('def_result'));  
        } elseif (isset($_POST['div'])) {
            $def_result = $request->valA / $request->valB;
            return view('result',compact('def_result'));  
        } else {
            echo "Qualcosa è andato storto";
        }
    }    

}

