<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index() {
        $data['list_publikasi'] = Publikasi::orderBy('id', 'DESC')->get();

        return view('web.publikasi.publikasi', $data);
    }
}
