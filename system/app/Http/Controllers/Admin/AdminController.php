<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {

        $data['penelitian_internal'] = Penelitian::where('jenis_penelitian', 'Internal')->count();
        $data['penelitian_DRTPM_APTV'] = Penelitian::where('jenis_penelitian', 'DRTPM/APTV')->count();

        $data['pengabdian_internal'] = Pengabdian::where('jenis_pengabdian', 'Internal')->count();
        $data['pengabdian_DRTPM_APTV'] = Pengabdian::where('jenis_pengabdian', 'DRTPM/APTV')->count();
        
        return view('admin.index', $data);
    }

    
   
}
