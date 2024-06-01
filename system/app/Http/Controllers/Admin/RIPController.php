<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RIP;
use Illuminate\Http\Request;

class RIPController extends Controller
{
    
    public function index()
    {
        $data['list_rip'] = RIP::all();

        return view('admin.profil.rip.index', $data);
    }

    
    public function create()
    {
        return view('admin.profil.rip.create');
    }

    
    public function store(Request $request)
    {
        $rip = New RIP();
        $rip->nama = request('nama');
        $rip->tahun_terbit = request('tahun_terbit');
        $rip->deskripsi = request('deskripsi');
        $rip->handleUploadCover();
        $rip->handleUploadFile();

        $rip->save();

        return redirect('admin/rip')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function edit($rip)
    {
        $data['rip'] = RIP::find($rip);

        return view('admin.profil.rip.edit', $data);
    }

    
    public function update($rip)
    {
        $rip = RIP::find($rip);
        $rip->nama = request('nama');
        $rip->tahun_terbit = request('tahun_terbit');
        $rip->deskripsi = request('deskripsi');
        $rip->handleUploadCover();
        $rip->handleUploadFile();

        $rip->save();

        return redirect('admin/rip')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($rip)
    {
        RIP::destroy($rip);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
    
}
