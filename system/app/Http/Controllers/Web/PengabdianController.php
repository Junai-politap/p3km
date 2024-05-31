<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function internal() {
        $data['list_penelitian'] = Pengabdian::where('jenis_pengabdian', 'Internal')->orderBy('tahun_terbit', 'ASC')->get();

        return view('web.pengabdian.internal', $data);
    }

    public function drtpmAptv() {
        $data['list_penelitian'] = Pengabdian::where('jenis_pengabdian', 'DRTPM/APTV')->orderBy('tahun_terbit', 'ASC')->get();

        return view('web.pengabdian.drtpm-aptv', $data);
    }
}
