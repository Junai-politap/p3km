<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Renstra extends ModelAuthenticate
{
    protected $table ="renstra";

    function handleUploadCover()
    {
        if (request()->hasFile('cover')) {
            $cover = request()->file('cover');
            $destination = "renstra-cover";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $cover->extension();
            $url = $cover->storeAs($destination, $filename);
            $this->cover = "app/" . $url;
            

        }
    }

    function handleUploadFile()
    {
        if (request()->hasFile('file_pdf')) {
            $file_pdf = request()->file('file_pdf');
            $destination = "renstra-file";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_pdf->extension();
            $url = $file_pdf->storeAs($destination, $filename);
            $this->file_pdf = "app/" . $url;
            

        }
    }
}
