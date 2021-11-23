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
    public function put($file) {
        $fileName   = $file->getClientOriginalName();
        $storedFile = Storage::putFileAs('public/images/upload/foodlist', $file, $fileName);

        $storedFilePath = Str::replace('public/', 'storage/', $storedFile);

        $image           = new Image();
        $image->path     = $storedFilePath;
        $image->filename = $fileName;
        $image->save();

        return $image;
    }

    public function delete($id) {

        $newsletter = FoodlistEntry::where('image_id', $id)->first();
        if($newsletter) {
            $newsletter->image_id = null;
            $newsletter->save();
        }
        $image = Image::find($id);
        $image->delete();
        Storage::delete('public/images/upload/foodlist/' . $image->filename);
    }
}