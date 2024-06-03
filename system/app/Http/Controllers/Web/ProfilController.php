<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pimpinan;
use App\Models\Profil;
use App\Models\Renstra;
use App\Models\RIP;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function  profil() {
        $data['list_profil'] = Profil::where('jenis', 'Profil')->get();

        return view('web.profil.profil', $data);
    }

    public function  visiMisi() {
        $data['list_visi'] = Profil::where('jenis', 'Visi')->get();
        $data['list_misi'] = Profil::where('jenis', 'Misi')->get();
        $data['list_tujuan'] = Profil::where('jenis', 'Tujuan')->get();

        return view('web.profil.visi-misi', $data);
    }

    public function  renstra() {
        $data['list_renstra'] = Renstra::orderBy('tahun_terbit', 'ASC')->get();

        return view('web.profil.renstra', $data);
    }

    public function  strukturOrganisasi() {
        $data['list_pimpinan'] = Pimpinan::all();

        return view('web.profil.pimpinan', $data);
    }

    public function  rip() {
        $data['list_rip'] = RIP::orderBy('tahun_terbit', 'ASC')->get();

        return view('web.profil.rip', $data);
    }
}
