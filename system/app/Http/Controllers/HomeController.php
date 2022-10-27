<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Kegiatan;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\Slide;

class HomeController extends Controller
{
    public function index(){

		$data['list_slide'] = Slide::all();
		$data['list_lowongan'] = Lowongan::all();
		return view ('home.index',$data);
	}

	public function informasi(){

		return view ('home.informasi');
	}

	public function lowongan(){
		$data['list_lowongan'] = Lowongan::all();
		return view ('home.lowongan', $data);
	}

	public function kegiatan(){
        $data['list_kegiatan'] = Kegiatan::all();
		return view ('home.kegiatan', $data);
	}

    public function showkegiatan($id){

        $data['kegiatan'] = Kegiatan::find($id);
        $data['list_galery'] = Galery::all();

        return view('home.showkegiatan', $data);
    }

	public function perusahaan(){
		$data['list_perusahaan'] = perusahaan::all();
		return view ('home.perusahaan', $data);
	}

	public function showperusahaan($id){

		$data['perusahaan'] = perusahaan::find($id);
		$data['list_lowongan'] = Lowongan::all();

		return view('home.showperusahaan', $data);
	}

	public function galeri(){
        $data['list_galery'] = Galery::all();

		return view ('home.galeri', $data);
	}

	public function tracer(){

		return view ('home.tracer');
	}
    
}
