<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function internal() {
        $data['list_penelitian'] = Penelitian::where('jenis_penelitian', 'Internal')->orderBy('tahun_terbit', 'ASC')->get();

        return view('web.penelitian.internal', $data);
    }

    public function drtpmAptv() {
        $data['list_penelitian'] = Penelitian::where('jenis_penelitian', 'DRTPM/APTV')->orderBy('tahun_terbit', 'ASC')->get();

        return view('web.penelitian.drtpm-Aptv', $data);
    }

    public function mahasiswa() {
        $data['list_penelitian'] = Penelitian::where('jenis_penelitian', 'Mahasiswa')->orderBy('tahun_terbit', 'ASC')->get();

        return view('web.penelitian.mahasiswa', $data);
    }
}
