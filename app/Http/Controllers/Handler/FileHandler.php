<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Storage;

class FileHandler extends Controller
{
    public static function upload($input_name, $path, $size = null)
    {
        request()->validate([
            $input_name => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            $input_name . '.mimes' => 'Invalid file try to upload!'
        ]);

        $root_path = config('ecommerce.upload_path');

        self::createDirectory("$root_path/$path");

        $image = request()->file($input_name);
        $image_name = strtolower(preg_replace('/\s+/', '-', $image->getClientOriginalName()));
        $image_name = time() . '-' . $image_name;
        $image_path = "$root_path/$path/$image_name";

        $resized_image = Image::make($image)->stream();
        Storage::disk('public')->put($image_path, $resized_image);

        return $image_path;
    }

    public static function createDirectory($path)
    {
        if (!Storage::disk('public')->exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }
    }

    public static function delete($path)
    {
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
