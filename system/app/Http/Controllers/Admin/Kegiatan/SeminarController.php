<?php

namespace App\Http\Controllers\Admin\Kegiatan;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        $data['list_seminar'] = Seminar::all();

        return view('admin.kegiatan.seminar.index', $data);
    }

    
    public function create()
    {
        return view('admin.kegiatan.seminar.create');
    }

    
    public function store(Request $request)
    {
        $seminar = New Seminar();
        $seminar->nama_seminar = request('nama_seminar');
        $seminar->tanggal_seminar = request('tanggal_seminar');
        $seminar->link_seminar = request('link_seminar');
        $seminar->jenis_seminar = request('jenis_seminar');
        $seminar->handleUploadPoto();
        $seminar->save();

        return redirect('admin/seminar')->with('success', 'Data Berhasil Disimpan');

    }

    
    public function show($seminar)
    {
        $data['seminar'] = Seminar::find($seminar);

        return view('admin.kegiatan.seminar.show', $data);
    }

    
    public function edit($seminar)
    {
        $data['seminar'] = Seminar::find($seminar);

        return view('admin.kegiatan.seminar.edit', $data);
    }

    
    public function update($seminar)
    {
        $seminar = Seminar::find($seminar);
        $seminar->nama_seminar = request('nama_seminar');
        $seminar->tanggal_seminar = request('tanggal_seminar');
        $seminar->link_seminar = request('link_seminar');
        $seminar->jenis_seminar = request('jenis_seminar');
        $seminar->handleUploadPoto();
        $seminar->save();

        return redirect('admin/seminar')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($seminar)
    {
        Seminar::destroy($seminar);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
