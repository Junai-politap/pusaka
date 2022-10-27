<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Perusahaan;
use App\Models\Alumni;
use App\Models\Lowongan;

class Pelamar extends Model
{

	protected $table = "pelamar";

	function handleUploadCV()
    {
        if (request()->hasFile('scan_cv')) {
            $scan_cv = request()->file('scan_cv');
            $destination = "cv";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $scan_cv->extension();
            $url = $scan_cv->storeAs($destination, $filename);
            $this->scan_cv = "app/" . $url;
        }
    }

    function handleUploadKTP()
    {
        if (request()->hasFile('scan_ktp')) {
            $scan_ktp = request()->file('scan_ktp');
            $destination = "ktp";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $scan_ktp->extension();
            $url = $scan_ktp->storeAs($destination, $filename);
            $this->scan_ktp = "app/" . $url;
        }
    }

    function handleUploadKK()
    {
        if (request()->hasFile('scan_kk')) {
            $scan_kk = request()->file('scan_kk');
            $destination = "kk";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $scan_kk->extension();
            $url = $scan_kk->storeAs($destination, $filename);
            $this->scan_kk = "app/" . $url;
        }
    }

    function handleUploadSurat()
    {
        if (request()->hasFile('scan_surat_lamaran')) {
            $scan_surat_lamaran = request()->file('scan_surat_lamaran');
            $destination = "surat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $scan_surat_lamaran->extension();
            $url = $scan_surat_lamaran->storeAs($destination, $filename);
            $this->scan_surat_lamaran = "app/" . $url;
        }
    }

	function Perusahaan(){
		return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
	}

	function Alumni(){
		return $this->belongsTo(Alumni::class, 'id');
	}

    function Lowongan(){
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
}
