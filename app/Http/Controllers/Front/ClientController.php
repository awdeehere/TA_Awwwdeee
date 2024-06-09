<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Penghargaan;
use App\Models\Admin\Pengrajin;
use App\Models\Admin\Sejarah;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function home()
    {
        return view('frontview.home',);
    }

    function galeri()
    {
        $sejarah = Sejarah::first();
        $penghargaan = Penghargaan::all();
        $pengrajin = Pengrajin::all();
        return view('frontview.galeri', compact('sejarah', 'penghargaan', 'pengrajin'));
    }

    function katalog()
    {
        return view('frontview.katalog');
    }
}
