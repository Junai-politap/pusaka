<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Kegiatan;

class Galery extends Model
{

	protected $table = "galery";


    function handleUploadGalery()
    {
        if (request()->hasFile('poto_kegiatan')) {
            $poto_kegiatan = request()->file('poto_kegiatan');
            $destination = "galery";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto_kegiatan->extension();
            $url = $poto_kegiatan->storeAs($destination, $filename);
            $this->poto_kegiatan = "app/" . $url;

        }
    }

    function Kegiatan(){
		return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
	}

}
