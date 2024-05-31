<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Penelitian extends Model
{
    protected $table ="penelitian";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "penelitian";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
