<?php

namespace App\Http\Controllers\Partial\Handler;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use Storage;

class FileHandler extends Controller
{
    public static function getStorage()
    {
        return Storage::disk('public');
    }

    public static function upload($image, $path, $size = null)
    {
        $root_path = config('ecommerce.upload_path');

        self::createDirectory("$root_path/$path");

        $image_name = time() . '-' . $image->getClientOriginalName();

        $image_path = "$root_path/$path/$image_name";

        $resized_image = Image::make($image)->stream();

        self::getStorage()->put($image_path, $resized_image);

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
        if (!self::getStorage()->exists($path)) {
            self::getStorage()->makeDirectory($path);
        }
    }

    public static function delete($path)
    {
        if (self::getStorage()->exists($path)) {
            self::getStorage()->delete($path);
        }
    }
}
