<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Pengabdian extends Model
{
    protected $table ="pengabdian";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "pengabdian";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
