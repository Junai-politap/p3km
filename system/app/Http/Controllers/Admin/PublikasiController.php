<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
   
    public function index()
    {
        $data['list_publikasi'] = Publikasi::all();

        return view('admin.publikasi.index', $data);
    }

    
    public function create()
    {
        return view('admin.publikasi.create');
    }

    
    public function store(Request $request)
    {
        $publikasi = New Publikasi();
        $publikasi->nama_penulis = request('nama_penulis');
        $publikasi->nama_jurnal = request('nama_jurnal');
        $publikasi->judul = request('judul');
        $publikasi->volume = request('volume');
        $publikasi->tahun_terbit = request('tahun_terbit');
        $publikasi->deskripsi = request('deskripsi');
        $publikasi->save();

        return redirect('admin/publikasi')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($publikasi)
    {
        $data['publikasi'] = Publikasi::find($publikasi);

        return view('admin.publikasi.show', $data);
    }

    
    public function edit($publikasi)
    {
        $data['publikasi'] = Publikasi::find($publikasi);

        return view('admin.publikasi.edit', $data);
    }

    
    public function update($publikasi)
    {
        $publikasi = Publikasi::find($publikasi);
        $publikasi->nama_penulis = request('nama_penulis');
        $publikasi->nama_jurnal = request('nama_jurnal');
        $publikasi->judul = request('judul');
        $publikasi->volume = request('volume');
        $publikasi->tahun_terbit = request('tahun_terbit');
        $publikasi->deskripsi = request('deskripsi');
        $publikasi->save();

        return redirect('admin/publikasi')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($publikasi)
    {
        Publikasi::destroy($publikasi);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
