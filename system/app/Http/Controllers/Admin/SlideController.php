<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $data['list_slide'] = Slide::all();

        return view('admin.slide.index', $data);
    }

    
    public function create()
    {
        return view('admin.slide.create');
    }

    
    public function store(Request $request)
    {
        $slide = New Slide();
        $slide->judul = request('judul');
        $slide->handleUploadPoto();
        $slide->save();

        return redirect('admin/slide')->with('success', 'Data Berhasil Disimpan');

    }

    
    public function show($slide)
    {
        $data['slide'] = Slide::find($slide);

        return view('admin.slide.show', $data);
    }

    
    public function edit($slide)
    {
        $data['slide'] = Slide::find($slide);

        return view('admin.slide.edit', $data);
    }

    
    public function update($slide)
    {
        $slide = Slide::find($slide);
        $slide->judul = request('judul');
        $slide->handleUploadPoto();
        $slide->save();

        return redirect('admin/slide')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($slide)
    {
        Slide::destroy($slide);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
