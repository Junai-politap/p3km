<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class RIP extends Model
{
    protected $table ="rip";

    function handleUploadCover()
    {
        if (request()->hasFile('cover')) {
            $cover = request()->file('cover');
            $destination = "rip-cover";
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
            $destination = "rip-file";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_pdf->extension();
            $url = $file_pdf->storeAs($destination, $filename);
            $this->file_pdf = "app/" . $url;
            

        }
    }
}
