<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    
    public function internal()
    {
        $data['list_panduan'] = Panduan::where('jenis_panduan', 'Panduan Internal')->orderBy('tahun_terbit', 'ASC')->get();
        return view('web.panduan.internal', $data);
    }

    public function pusat(){
        $data['list_panduan'] = Panduan::where('jenis_panduan', 'Panduan Pusat')->orderBy('tahun_terbit', 'ASC')->get();
        return view('web.panduan.pusat', $data);
    }
    
}
