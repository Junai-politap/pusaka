<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Alumni;

class AuthController extends Controller
{
    public function login(){
        return View ('login');
    }


    public function loginproses(){
        
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin');
        }

        if (auth()->guard('perusahaan')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('perusahaan');
        }

        if (auth()->guard('alumni')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('alumni');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
        auth()->guard('perusahaan');
        auth()->guard('alumni');
        return redirect('/');
    }
}
