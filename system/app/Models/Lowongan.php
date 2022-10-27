<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Perusahaan;
use App\Models\Pelamar;

class Lowongan extends Model
{

	protected $table = "lowongan";
	
    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "lowongan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }


	function Perusahaan(){
		return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
	}

	function Pelamar(){
		return $this->belongsTo(Pelamar::class, 'id_lowongan');
	}
}
