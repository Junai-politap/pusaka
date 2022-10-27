<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\slide;



class BaseAlumniController extends Controller
{
    
    public function index()
    {   
        $data['alumni'] = $alumni = auth()->guard('alumni')->user();

        $data['list_lowongan'] = Lowongan::all();

        $data['list_slide'] = Slide::all();
        return view('alumni.index', $data);
    }

    
    public function lowongan()
    {
        $data['alumni'] = $alumni = auth()->guard('alumni')->user();

        $data['list_lowongan'] = Lowongan::all();

        return view('alumni.lowongan', $data);
    }


    public function perusahaan()
    {
        $data['alumni'] = $alumni = auth()->guard('alumni')->user();
        
        $data['list_perusahaan'] = Perusahaan::all();

        return view('alumni.perusahaan', $data);
    }
}
