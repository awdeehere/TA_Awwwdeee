<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    
    public function index()
    {
        return view('admin.sejarah.index');
    }
}
