<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
       dd("Client Controller");
        return view('clients/index');
    }
}
