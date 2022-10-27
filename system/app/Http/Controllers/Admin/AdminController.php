<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        return view('admin.index', $data);
    }

   
}
