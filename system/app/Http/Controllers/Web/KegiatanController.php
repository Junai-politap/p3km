<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Seminar;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function seminarNasional() {
        $data['list_seminar'] = Seminar::where('jenis_seminar', 'Seminar Nasional')->orderBy('tanggal_seminar', 'ASC')->get();

        return view('web.kegiatan.seminar-nasional', $data);
    }

    public function seminarInternasional() {
        $data['list_seminar'] = Seminar::where('jenis_seminar', 'Seminar Internasional')->orderBy('tanggal_seminar', 'ASC')->get();

        return view('web.kegiatan.seminar-internasional', $data);
    }


    public function galeri() {
        $data['list_galeri'] = Galeri::all();

        return view('web.kegiatan.galeri', $data);
    }
}
