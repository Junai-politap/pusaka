<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;
use App\Models\Pelamar;

class Alumni extends ModelAuthenticate
{

	protected $table = "alumni";
	

    function handleUploadAlumniPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "alumni";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }

	function Pelamar(){
		return $this->belongsTo(Pelamar::class, 'nim');
	}

}
