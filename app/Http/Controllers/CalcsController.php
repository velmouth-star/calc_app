<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1, $calc, $num2)
    {
        if ($calc == 'addition') {
            $result = $num1 + $num2;
        }
        if ($calc == 'subtraction') {
            $result = $num1 - $num2;
        }
        if ($calc == 'multiplication') {
            $result = $num1 * $num2;
        }
        if ($calc == 'division') {
            $result = $num1 / $num2;
        }
        return view('message.hello', ['result' => $result]);
    }
}
