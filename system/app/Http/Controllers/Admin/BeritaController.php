<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    
    public function index()
    {
        $data['list_berita'] = Berita::all();

        return view('admin.berita.index', $data);
    }

    
    public function create()
    {
        return view('admin.berita.create');
    }

    
    public function store(Request $request)
    {
        $berita = New Berita();
        $berita->nama_berita = request('nama_berita');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->detail = request('detail');
        $berita->status = 1;
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('admin.berita.show', $data);
    }

    
    public function edit($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('admin.berita.edit', $data);
    }

    
    public function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->nama_berita = request('nama_berita');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->detail = request('detail');
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('admin/berita')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function arsip($berita){
        $berita = Berita::find($berita);
        $berita->status = 2;
        $berita->save();

        return back()->with('success', 'Berita Berhasil di Arsipkan');
    }

    
    public function publis($berita){
        $berita = Berita::find($berita);
        $berita->status = 1;
        $berita->save();

        return back()->with('success', 'Berita Berhasil di Publiskan');
    }
}
