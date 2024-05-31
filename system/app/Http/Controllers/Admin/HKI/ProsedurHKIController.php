<?php

namespace App\Http\Controllers\Admin\HKI;

use App\Http\Controllers\Controller;
use App\Models\ProsedurHKI;
use Illuminate\Http\Request;

class ProsedurHKIController extends Controller
{
    
    public function index()
    {
        $data['list_prosedur'] = ProsedurHKI::all();

        return view('admin.layanan-hki.prosedur-hki.index', $data);
    }

    
    public function create()
    {
        return view('admin.layanan-hki.prosedur-hki.create');
    }

    
    public function store(Request $request)
    {
        $prosedur = New ProsedurHKI();
        $prosedur->nama = request('nama');
        $prosedur->handleUploadFile();

        $prosedur->save();

        return redirect('admin/prosedur-hki')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($prosedur)
    {
        $data['prosedur'] = ProsedurHKI::find($prosedur);

        return view('admin.layanan-hki.prosedur-hki.show', $data);
    }

    
    public function edit($prosedur)
    {
        $data['prosedur'] = ProsedurHKI::find($prosedur);

        return view('admin.layanan-hki.prosedur-hki.edit', $data);
    }

    
    public function update($prosedur)
    {
        $prosedur = ProsedurHKI::find($prosedur);
        $prosedur->nama = request('nama');
        $prosedur->handleUploadFile();

        $prosedur->save();

        return redirect('admin/prosedur-hki')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($prosedur)
    {
        ProsedurHKI::destroy($prosedur);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
