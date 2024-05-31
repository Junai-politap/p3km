<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::all();

        return view('admin.pengabdian.index', $data);
    }

    
    public function create()
    {
        return view('admin.pengabdian.create');
    }

    
    public function store(Request $request)
    {
        $pengabdian = New Pengabdian();
        $pengabdian->judul = request('judul');
        $pengabdian->ketua_peneliti = request('ketua_peneliti');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun_terbit = request('tahun_terbit');
        $pengabdian->deskripsi = request('deskripsi');
        $pengabdian->jenis_pengabdian = request('jenis_pengabdian');
        $pengabdian->save();

        return redirect('admin/pengabdian')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($pengabdian)
    {
        $data['pengabdian'] = Pengabdian::find($pengabdian);

        return view('admin.pengabdian.show', $data);
    }

    
    public function edit($pengabdian)
    {
        $data['pengabdian'] = Pengabdian::find($pengabdian);

        return view('admin.pengabdian.edit', $data);
    }

    
    public function update($pengabdian)
    {
        $pengabdian = Pengabdian::find($pengabdian);
        $pengabdian->judul = request('judul');
        $pengabdian->ketua_peneliti = request('ketua_peneliti');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun_terbit = request('tahun_terbit');
        $pengabdian->deskripsi = request('deskripsi');
        $pengabdian->jenis_pengabdian = request('jenis_pengabdian');
        $pengabdian->save();

        return redirect('admin/pengabdian')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($pengabdian)
    {
        Pengabdian::destroy($pengabdian);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
