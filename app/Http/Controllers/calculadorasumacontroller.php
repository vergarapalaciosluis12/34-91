<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadorasumacontroller extends Controller
{
    function suma($num1,$num2){
        return $num1+$num2;
    }
}
