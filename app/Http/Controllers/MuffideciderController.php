<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuffideciderController extends Controller
{
    public function roll(){
        $choiceA = request('choice_a');
        $choiceB = request('choice_b');
        $result = rand(0, 1) ? $choiceA : $choiceB;
        return view('muffi-decider', ['result' => $result]);
    }
}
