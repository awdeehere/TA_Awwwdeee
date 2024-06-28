<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Penghargaan;
use App\Models\Admin\Pengrajin;
use App\Models\Admin\Sejarah;
use App\Models\Admin\Produk;
use App\Models\Admin\Tentang;
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
        $produk = Produk::with('carousels')->get();
        return view('frontview.katalog', compact('produk'));
    }

    function about()
    {
        $tentang = Tentang::first();
        return view('frontview.about', compact('tentang'));
    }
}
