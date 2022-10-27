<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_alumni'] = Alumni::all();

        return view('admin.alumni.index', $data);
    }

   
    public function create()
    {

    }

    public function store(Request $request)
    {
        $alumni = New Alumni;
        $alumni->nim = request('nim');
        $alumni->nik = request('nik');
        $alumni->nama_lengkap = request('nama_lengkap');
        $alumni->email = request('email');
        $alumni->username = request('username');
        $alumni->password = request('confirmasi_password');
        $alumni->confirmasi_password = request('confirmasi_password');
        $alumni->tempat_lahir = request('tempat_lahir');
        $alumni->tanggal_lahir = request('tanggal_lahir');
        $alumni->program_studi = request('program_studi');
        $alumni->lulusan = request('lulusan');
        $alumni->jenis_kelamin = request('jenis_kelamin');
        $alumni->agama = request('agama');
        $alumni->alamat = request('alamat');
        $alumni->no_telp = request('no_telp');
        $alumni->handleUploadAlumniPoto();
        $alumni->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show($id)
    {
        $data['user'] = auth()->user();
        $data['alumni'] = Alumni::find($id);

        return view('admin.alumni.show', $data);
    }

    
    public function edit($id)
    {
        $data['user'] = auth()->user();
        $data['alumni'] = Alumni::find($id);

        return view('admin.alumni.edit', $data);
    }

  
    public function update(Alumni $alumni)
    {
        $alumni->nim = request('nim');
        $alumni->nik = request('nik');
        $alumni->nama_lengkap = request('nama_lengkap');
        $alumni->email = request('email');
        $alumni->username = request('username');
        $alumni->password = request('confirmasi_password');
        $alumni->confirmasi_password = request('confirmasi_password');
        $alumni->tempat_lahir = request('tempat_lahir');
        $alumni->tanggal_lahir = request('tanggal_lahir');
        $alumni->program_studi = request('program_studi');
        $alumni->lulusan = request('lulusan');
        $alumni->jenis_kelamin = request('jenis_kelamin');
        $alumni->agama = request('agama');
        $alumni->alamat = request('alamat');
        $alumni->no_telp = request('no_telp');
        $alumni->handleUploadAlumniPoto();
        $alumni->save();

        return redirect('admin/alumni')->with('success', 'Data Berhasil Diedit');
    }

   
    public function destroy($alumni)
    {
        Alumni::destroy($alumni);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
