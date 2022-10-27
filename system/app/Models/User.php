<?php

namespace App\Models;


use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;

class User extends ModelAuthenticate
{
    protected $table = "user";
    
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "user";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

}
