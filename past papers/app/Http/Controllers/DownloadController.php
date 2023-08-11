<?php

namespace App\Http\Controllers;

use File;
use ZipArchive;
use App\Models\Units;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function FileDownLoarder($unit_slug){
        $unit = Units::where('slug', $unit_slug)->first();
        $zip = new ZipArchive;
        $fileName = 'year1semester1PP.zip';
        if($unit){

            if ($zip -> open (public_path($fileName), ZipArchive::CREATE)=== TRUE){
                $files = File::files(public_path('papers/semester1.1'));
                foreach($files as $key => $value){
                        $relativeNameInZipFile = basename($value);
                        $zip -> addFile ($value,   $relativeNameInZipFile);
                    }
                $zip->close();
                return response ()-> download (public_path($fileName));

                }}
            else{
                return redirect('/');
            }
       

        }


    }

