<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Renstra;
use Illuminate\Http\Request;

class RenstraController extends Controller
{
    
    public function index()
    {
        $data['list_renstra'] = Renstra::all();

        return view('admin.profil.renstra.index', $data);
    }

    
    public function create()
    {
        return view('admin.profil.renstra.create');
    }

    
    public function store(Request $request)
    {
        $renstra = New Renstra();
        $renstra->nama_renstra = request('nama_renstra');
        $renstra->tahun_terbit = request('tahun_terbit');
        $renstra->deskripsi = request('deskripsi');
        $renstra->handleUploadCover();
        $renstra->handleUploadFile();

        $renstra->save();

        return redirect('admin/renstra')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function edit($renstra)
    {
        $data['renstra'] = Renstra::find($renstra);

        return view('admin.profil.renstra.edit', $data);
    }

    
    public function update($renstra)
    {
        $renstra = Renstra::find($renstra);
        $renstra->nama_renstra = request('nama_renstra');
        $renstra->tahun_terbit = request('tahun_terbit');
        $renstra->deskripsi = request('deskripsi');
        $renstra->handleUploadCover();
        $renstra->handleUploadFile();

        $renstra->save();

        return redirect('admin/renstra')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($renstra)
    {
        Renstra::destroy($renstra);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
