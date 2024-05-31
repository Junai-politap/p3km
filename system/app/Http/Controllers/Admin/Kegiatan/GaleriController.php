<?php

namespace App\Http\Controllers\Admin\Kegiatan;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    
    public function index()
    {
        $data['list_galeri'] = Galeri::all();

        return view('admin.kegiatan.galeri.index', $data);
    }

    
    public function create()
    {
        return view('admin.kegiatan.galeri.create');
    }

    
    public function store(Request $request)
    {
        $galeri = New Galeri();
        $galeri->judul = request('judul');
        $galeri->handleUploadPoto();
        $galeri->save();

        return redirect('admin/galeri')->with('success', 'Data Berhasil Disimpan');

    }

    
    public function show($galeri)
    {
        $data['galeri'] = Galeri::find($galeri);

        return view('admin.kegiatan.galeri.show', $data);
    }

    
    public function edit($galeri)
    {
        $data['galeri'] = Galeri::find($galeri);

        return view('admin.kegiatan.galeri.edit', $data);
    }

    
    public function update($galeri)
    {
        $galeri = Galeri::find($galeri);
        $galeri->judul = request('judul');
        $galeri->handleUploadPoto();
        $galeri->save();

        return redirect('admin/galeri')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($galeri)
    {
        Galeri::destroy($galeri);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
