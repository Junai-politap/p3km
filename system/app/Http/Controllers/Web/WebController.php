<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Profil;
use App\Models\Seminar;
use App\Models\Slide;
use Illuminate\Http\Request;

class WebController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_profil'] = Profil::all();
        $data['list_berita'] = Berita::all();
        $data['list_seminar'] = Seminar::all();
        
        $data['penelitian_internal'] = Penelitian::where('jenis_penelitian', 'Internal')->count();
        $data['penelitian_DRTPM_APTV'] = Penelitian::where('jenis_penelitian', 'DRTPM/APTV')->count();

        $data['pengabdian_internal'] = Pengabdian::where('jenis_pengabdian', 'Internal')->count();
        $data['pengabdian_DRTPM_APTV'] = Pengabdian::where('jenis_pengabdian', 'DRTPM/APTV')->count();

        return view('web.index', $data);
    }

    public function tentangKami() {
        return view('web.tentang-kami');
    }
}
