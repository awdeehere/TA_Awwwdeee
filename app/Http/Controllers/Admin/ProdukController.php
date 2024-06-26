<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Produk;
use App\Models\Admin\ProdukCarousel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('admin.produk.index', $data);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function Show($id)
    {
        return view('admin.produk.show', [
            'produk' => Produk::with('carousels')->findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.produk.edit', [
            'produk' => Produk::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'nama' => 'required|string|max:255',
        //     'deskripsi' => 'required|string|max:255',
        //     'foto' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        // ], [
        //     'nama.required' => 'Nama Harus Diisi',
        //     'nama.string' => 'Nama Harus Berupa Kalimat',
        //     'nama.max' => 'Nama Maksimal 255 Karakter',
        //     'deskripsi.required' => 'Deskripsi Harus Diisi',
        //     'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
        //     'deskripsi.max' => 'Deskripsi Maksimal 255 Karakter',
        //     'foto.required' => 'Gambar Harus Diisi',
        //     'foto.image' => 'Gambar Harus Berupa Gambar',
        //     'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
        //     'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        // ]);

        // if ($validator->fails()) {
        //     return redirect(url()->previous())
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $produk = new Produk();
        $produk->nama = request('nama');
        $produk->deskripsi = request('deskripsi');
        $produk->hak_cipta = request('hak_cipta');
        $produk->save();

        $id_produk = $produk->id;
        $produk = new ProdukCarousel();
        $produk->handleUploadImage($id_produk);

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'nama' => 'string|max:255',
        //     'deskripsi' => 'string|max:255',
        //     'foto' => 'image|mimes:png,jpg,jpeg|max:5120',
        // ], [
        //     'nama.string' => 'Nama Harus Berupa Kalimat',
        //     'nama.max' => 'Nama Maksimal 255 Karakter',
        //     'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
        //     'deskripsi.max' => 'Des Maksimal 255 Karakter',
        //     'foto.image' => 'Gambar Harus Berupa Gambar',
        //     'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
        //     'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        // ]);

        // if ($validator->fails()) {
        //     return redirect(url()->previous())
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $produk = Produk::find($id);
        if (request('nama')) $produk->nama = request('nama');
        if (request('deskripsi')) $produk->deskripsi = request('deskripsi');
        $produk->save();

        if (request('foto')) $id_produk = $produk->id;
        $produk = new ProdukCarousel();
        $produk->handleUploadImage($id_produk);

        return redirect('admin/produk')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $produk = Produk::find($id);
        $carousel = new ProdukCarousel();
        $carousel->handleDeleteImage($produk->id);
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }
}
