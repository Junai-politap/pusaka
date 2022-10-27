<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;
use App\Models\Lowongan;

class Perusahaan extends ModelAuthenticate
{
 
	protected $table = "perusahaan";
    

    function handleUploadMou()
    {
        if (request()->hasFile('mou')) {
            $mou = request()->file('mou');
            $destination = "bukti_mou";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $mou->extension();
            $url = $mou->storeAs($destination, $filename);
            $this->mou = "app/" . $url;

        }
    }

    function handleUploadPoto()
    {

        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "poto";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;

        }
    }


	function Lowongan(){
		return $this->belongsTo(Lowongan::class, 'id');
	}

}
