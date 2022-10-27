<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_perusahaan'] = Perusahaan::all();

        return view('admin.perusahaan.index', $data);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $perusahaan = new Perusahaan;
		$perusahaan->nama_perusahaan = request('nama_perusahaan');
		$perusahaan->alamat = request('alamat');
		$perusahaan->email = request('email');
        $perusahaan->username = request('username');
		$perusahaan->password = request('confirm_pass');
        $perusahaan->confirm_pass = request('confirm_pass');
        $perusahaan->nama_pemegang_akses = request('nama_pemegang_akses');
        $perusahaan->no_telp = request('no_telp');
        $perusahaan->handleUploadMou();
        $perusahaan->handleUploadPoto();
        $perusahaan->save();

        return  back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show(Perusahaan $perusahaan)
    {
        $data['user'] = auth()->user();
        $data['perusahaan'] = $perusahaan;

        return view('admin.perusahaan.show', $data);
    }

    
    public function edit(Perusahaan $perusahaan)
    {
        $data['user'] = auth()->user();
        $data['perusahaan'] = $perusahaan;

        return view('admin.perusahaan.edit', $data);
    }

    public function update(Perusahaan $perusahaan)
    {
        $perusahaan->nama_perusahaan = request('nama_perusahaan');
		$perusahaan->alamat = request('alamat');
		$perusahaan->email = request('email');
        $perusahaan->username = request('username');
		$perusahaan->password = request('confirm_pass');
        $perusahaan->confirm_pass = request('confirm_pass');
        $perusahaan->nama_pemegang_akses = request('nama_pemegang_akses');
        $perusahaan->no_telp = request('no_telp');
        $perusahaan->handleUploadMou();
        $perusahaan->handleUploadPoto();
        $perusahaan->save();

        return  redirect('admin/perusahaan')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($perusahaan)
    {
        Perusahaan::destroy($perusahaan);
        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
