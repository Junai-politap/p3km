<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table ="berita";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
