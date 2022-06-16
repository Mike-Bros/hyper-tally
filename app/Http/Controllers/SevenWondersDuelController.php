<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use Illuminate\Http\Request;

class SevenWondersDuelController {

    public function __construct()
    {

    }

    public function index(Request $request)
    {

        return view('sevenWondersDuel.index');
    }


}
