<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        $data['list_penelitian'] = Penelitian::all();

        return view('admin.penelitian.index', $data);
    }

    
    public function create()
    {
        return view('admin.penelitian.create');
    }

    
    public function store(Request $request)
    {
        $penelitian = New Penelitian();
        $penelitian->judul = request('judul');
        $penelitian->ketua_peneliti = request('ketua_peneliti');
        $penelitian->anggota_dosen = request('anggota_dosen');
        $penelitian->anggota_mahasiswa = request('anggota_mahasiswa');
        $penelitian->skema = request('skema');
        $penelitian->tahun_terbit = request('tahun_terbit');
        $penelitian->deskripsi = request('deskripsi');
        $penelitian->jenis_penelitian = request('jenis_penelitian');
        $penelitian->save();

        return redirect('admin/penelitian')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($penelitian)
    {
        $data['penelitian'] = Penelitian::find($penelitian);

        return view('admin.penelitian.show', $data);
    }

    
    public function edit($penelitian)
    {
        $data['penelitian'] = Penelitian::find($penelitian);

        return view('admin.penelitian.edit', $data);
    }

    
    public function update($penelitian)
    {
        $penelitian = Penelitian::find($penelitian);
        $penelitian->judul = request('judul');
        $penelitian->ketua_peneliti = request('ketua_peneliti');
        $penelitian->anggota_dosen = request('anggota_dosen');
        $penelitian->anggota_mahasiswa = request('anggota_mahasiswa');
        $penelitian->skema = request('skema');
        $penelitian->tahun_terbit = request('tahun_terbit');
        $penelitian->deskripsi = request('deskripsi');
        $penelitian->jenis_penelitian = request('jenis_penelitian');
        $penelitian->save();

        return redirect('admin/penelitian')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($penelitian)
    {
        Penelitian::destroy($penelitian);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
