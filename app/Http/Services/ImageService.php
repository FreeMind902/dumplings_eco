<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\FoodlistEntry;
use App\Models\Image;
use App\Models\FoodlistSorting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    public function put($file, $path = null) {
        $fileName   = $file->getClientOriginalName();
        if ($path != null) {
            $path = $path.'/';
        }
        $storedFile = Storage::putFileAs('public/images/upload'.$path , $file, $fileName);
        $storedFilePath = Str::replace('public/', 'storage/', $storedFile);
        return (object) ['image_file_name' => $fileName, 'image_path' => $storedFilePath];
    }

    public function delete($filename,$path = null) {

        if ($path != null) {
            $path = $path.'/';
        }
        Storage::delete('public/images/upload/news/' . $path  . $filename);
    }
}