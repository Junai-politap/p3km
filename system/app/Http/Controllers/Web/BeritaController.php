<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();

        return view('web.berita.berita', $data);
    
    }

    public function show($berita){
        $data['berita'] = Berita::find($berita);
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();
        return view('web.berita.show', $data);
    }
}
