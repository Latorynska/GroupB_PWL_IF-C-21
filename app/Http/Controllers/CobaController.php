<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function test()
    {
        return view('lihat.index',compact());
    }
}
