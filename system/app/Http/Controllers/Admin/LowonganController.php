<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Lowongan;
use App\Models\Perusahaan;

class LowonganController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_lowongan'] = Lowongan::all();
        $data['list_perusahaan'] = perusahaan::all();

        return view('admin.lowongan.index', $data);
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $lowongan = new Lowongan;
		$lowongan->id_perusahaan = request('id_perusahaan');
		$lowongan->nama_lowongan = request('nama_lowongan');
		$lowongan->fungsi_kerja = request('fungsi_kerja');
		$lowongan->jenjang_karir = request('jenjang_karir');
		$lowongan->pengalaman = request('pengalaman');
		$lowongan->jurusan = request('jurusan');
		$lowongan->persyaratan = request('persyaratan');
		$lowongan->spesifikasi = request('spesifikasi');
        $lowongan->handleUploadPoto();
        $lowongan->save();

        return redirect('admin/lowongan')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show(Lowongan $lowongan)
    {
        $data['user'] = auth()->user();
        $data['lowongan'] = $lowongan;

        return view('admin.lowongan.show', $data);
    }

    
    public function edit(Lowongan $lowongan)
    {
        $data['user'] = auth()->user();
        $data['lowongan'] = $lowongan;

        return view('admin.lowongan.edit', $data);
    }

    
    public function update(Lowongan $lowongan)
    {
        $lowongan->id_perusahaan = request('id_perusahaan');
		$lowongan->nama_lowongan = request('nama_lowongan');
		$lowongan->fungsi_kerja = request('fungsi_kerja');
		$lowongan->jenjang_karir = request('jenjang_karir');
		$lowongan->pengalaman = request('pengalaman');
		$lowongan->jurusan = request('jurusan');
		$lowongan->persyaratan = request('persyaratan');
		$lowongan->spesifikasi = request('spesifikasi');
        $lowongan->handleUploadPoto();
        $lowongan->save();

        return redirect('admin/lowongan')->with('success', 'Data Berhasil Di Simpan');
    }

   
    public function destroy($lowongan)
    {
        Lowongan::destroy($lowongan);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
