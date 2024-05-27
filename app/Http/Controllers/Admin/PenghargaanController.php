<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use App\Models\Admin\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{

    public function index()
    {
        $data['list_penghargaan'] = Penghargaan::all();
        return view('admin.penghargaan.index', $data);
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }
}