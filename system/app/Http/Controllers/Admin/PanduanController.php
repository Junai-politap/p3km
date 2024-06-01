<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        $data['list_panduan'] = Panduan::orderBy('tahun_terbit', 'DESC')->get();

        return view('admin.panduan.index', $data);
    }

    
    public function create()
    {
        return view('admin.panduan.create');
    }

    
    public function store(Request $request)
    {
        $panduan = New Panduan();
        $panduan->nama = request('nama');
        $panduan->jenis_panduan = request('jenis_panduan');
        $panduan->tahun_terbit = request('tahun_terbit');
        $panduan->handleUploadFile();

        $panduan->save();

        return redirect('admin/panduan')->with('success', 'Data Berhasil Disimpan');
    }


    
    public function edit($panduan)
    {
        $data['panduan'] = Panduan::find($panduan);

        return view('admin.panduan.edit', $data);
    }

    
    public function update($panduan)
    {
        $panduan = Panduan::find($panduan);
        $panduan->nama = request('nama');
        $panduan->jenis_panduan = request('jenis_panduan');
        $panduan->tahun_terbit = request('tahun_terbit');
        $panduan->handleUploadFile();

        $panduan->save();

        return redirect('admin/panduan')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($panduan)
    {
        Panduan::destroy($panduan);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
