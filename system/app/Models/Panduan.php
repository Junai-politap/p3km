<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Panduan extends Model
{
    protected $table ="panduan";

    function handleUploadFile()
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "panduan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }
    }
}
