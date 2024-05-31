<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HKI;
use App\Models\ProsedurHKI;
use Illuminate\Http\Request;

class HKIController extends Controller
{
    public function prosedurHKI() {
        $data['list_prosedur_hki'] = ProsedurHKI::all();

        return view('web.sentral-hki.prosedur', $data);
    }

    public function HKI() {
        $data['list_hki'] = HKI::orderBy('tahun_terbit', 'ASC')->get();

        return view('web.sentral-hki.hki', $data);
    }
}
