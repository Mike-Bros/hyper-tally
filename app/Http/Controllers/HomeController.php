<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController {

    public function __construct()
    {

    }

    public function index(Request $request)
    {

        return view('welcome');
    }
}
