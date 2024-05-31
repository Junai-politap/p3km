<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $data['list_admin'] = Admin::all();

        return view('admin.user.index', $data);
    }

    
    public function create()
    {
        return view('admin.user.create');
    }

    
    public function store(Request $request)
    {
        $admin = New Admin();
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Disimpan');

    }

    
    public function show($admin)
    {
        $data['admin'] = Admin::find($admin);

        return view('admin.user.show', $data);
    }

    
    public function edit($admin)
    {
        $data['admin'] = Admin::find($admin);

        return view('admin.user.edit', $data);
    }

    
    public function update($admin)
    {
        $admin = Admin::find($admin);
        $admin->nama = request('nama');
        $admin->username = request('username');
        if(request('password')) $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
