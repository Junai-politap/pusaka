<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_slide'] = Slide::all();

        return view('admin.slide.index', $data);
    }

   
    public function store(Request $request)
    {
        $slide = New Slide;
        $slide->title = request('title');
        $slide->handleUploadSLide();
        $slide->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

   
    
    public function update(Slide $slide)
    {
        $slide->title = request('title');
        $slide->handleUploadSLide();
        $slide->save();

        return back()->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($slide)
    {
        Slide::destroy($slide);

        return back()->with('danger', 'Data berhasil Dihapus');
    }
}
