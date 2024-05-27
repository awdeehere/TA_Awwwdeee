<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function home()
    {
        return view('frontview.home');
    }

    function galeri()
    {
        return view('frontview.galeri');
    }

    function katalog()
    {
        return view('frontview.katalog');
    }
}
