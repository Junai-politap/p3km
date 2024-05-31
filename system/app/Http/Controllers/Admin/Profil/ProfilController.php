<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function index()
    {
        $data['list_profil'] = Profil::all();

        return view('admin.profil.profil.index', $data);
    }

    
    public function create()
    {
        return view('admin.profil.profil.create');
    }

    
    public function store(Request $request)
    {
        $profil = New Profil();
        $profil->judul = request('judul');
        $profil->jenis = request('jenis');
        $profil->text = request('text');
        $profil->save();

        return redirect('admin/profil')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('admin.profil.profil.show', $data);
    }

    
    public function edit($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('admin.profil.profil.edit', $data);
    }

    
    public function update($profil)
    {
        $profil = Profil::find($profil);
        $profil->judul = request('judul');
        $profil->jenis = request('jenis');
        $profil->text = request('text');
        $profil->save();

        return redirect('admin/profil')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($profil)
    {
        Profil::destroy($profil);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
