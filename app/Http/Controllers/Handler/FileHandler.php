<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use Storage;

class FileHandler extends Controller
{
    /**
     * Image upload
     * @param $input_name
     * @param $path
     * @param null $size
     * @return string (upload image path)
     */
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

    /**
     * Upload editor image
     * @param $description
     * @return string (html dom include uploaded image path)
     */
    public static function uploadEditorImage($description)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) { // $img dom
            $base64_code = $img->getAttribute('src');

            [$type, $data] = explode(';', $base64_code);
            [, $extension] = explode('/', $type);
            [, $data] = explode(',', $data);

            $image_name = uniqid() . '.' . $extension;

            $make_image = Image::make($data)->stream();
            $root_path = config('ecommerce.upload_path');
            $path = "$root_path/" . Product::IMAGE_PATH . "/$image_name";
            Storage::disk('public')->put($path, $make_image);

            $img->setAttribute('src', "/storage/$path");
        }

        return $dom->saveHTML();
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
