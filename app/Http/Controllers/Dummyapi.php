<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dummyapi extends Controller
{
    function getData(){
        return["name"=>"mandeep kaur"];
    }
}
