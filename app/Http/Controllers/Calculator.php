<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    //

    function calculator(){
        // $first_number=30;
        // $second_number=40;
        // $sum= $first_number+$second_number;
        return view('calculator.calculator');
    }

    function calculate(Request $req){


        try{
            $validated=$req->validate([
                'first_number'=>'numeric',
                'second_number'=>'numeric'
            ]);
    
    
            $sum=$validated['first_number']+$validated['second_number'];
    
            return redirect()->back()->with(['sum'=>$sum]);

        }
        catch(\Throwable $th){
            dd($th);
            return redirect()->back()->with(['message'=>$th->getMessages()]);
        }


    }
}

// $cal = new Calculator();
// $cal->calculator(20,30);