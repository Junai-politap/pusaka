<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Galery;


class Kegiatan extends Model
{

	protected $table = "kegiatan";

    function handleUploadPotoKegiatan()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "kegiatan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;

        }
    }

    function Galery(){
		return $this->belongsTo(Galery::class, 'id');
	}

}
