<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
    //    dd("Test");
        return view('pages/login/index');
    }
}
