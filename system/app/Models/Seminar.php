<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Seminar extends Model
{
    protected $table ="seminar";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "seminar";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
