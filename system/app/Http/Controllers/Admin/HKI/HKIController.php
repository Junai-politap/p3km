<?php

namespace App\Http\Controllers\Admin\HKI;

use App\Http\Controllers\Controller;
use App\Models\HKI;
use Illuminate\Http\Request;

class HKIController extends Controller
{
    public function index()
    {
        $data['list_hki'] = HKI::all();

        return view('admin.layanan-hki.hki.index', $data);
    }

    
    public function create()
    {
        return view('admin.layanan-hki.hki.create');
    }

    
    public function store(Request $request)
    {
        $hki = New HKI();
        $hki->nama = request('nama');
        $hki->tahun_terbit = request('tahun_terbit');
        $hki->handleUploadFile();

        $hki->save();

        return redirect('admin/hki')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($hki)
    {
        $data['hki'] = HKI::find($hki);

        return view('admin.layanan-hki.hki.show', $data);
    }

    
    public function edit($hki)
    {
        $data['hki'] = HKI::find($hki);

        return view('admin.layanan-hki.hki.edit', $data);
    }

    
    public function update($hki)
    {
        $hki = HKI::find($hki);
        $hki->nama = request('nama');
        $hki->tahun_terbit = request('tahun_terbit');
        $hki->handleUploadFile();

        $hki->save();

        return redirect('admin/hki')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($hki)
    {
        HKI::destroy($hki);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
