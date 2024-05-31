<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class HKI extends Model
{
    protected $table="hki";
    
    function handleUploadFile()
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "hki";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }
    }
}
