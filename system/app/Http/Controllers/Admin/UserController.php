<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $data['list_user'] = User::all();

        return view('admin.user.index', $data);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('confirmasi_password');
        $user->confirmasi_password = request('confirmasi_password');
        $user->handleUploadFoto();
        $user->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show(User $user)
    {
        $data['user'] = auth()->user();
        $data['user'] = $user;

        return view('admin.user.show', $data);
    }

   
    public function edit(User $user)
    {
        $data['user'] = auth()->user();
        $data['user'] = $user;

        return view('admin.user.edit', $data);
    }

    
    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('confirmasi_password');
        $user->confirmasi_password = request('confirmasi_password');
        $user->handleUploadFoto();
        $user->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil Disimpan');
    }

   
    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
