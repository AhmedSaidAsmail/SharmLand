<?php
namespace App\Http\Controllers\Admin;

use Intervention\Image\Facades\Image;
class UploadImageController {
    public static function Upload($image, $path,$width) {
        $newPath = public_path() . $path;
        if (!is_dir($newPath)) {
            mkdir($newPath, 0777);
            mkdir($newPath . "thumb/", 0777);
        }
        $filename = md5(uniqid(mt_rand())) . "." . $image->getClientOriginalExtension();
        $thumb    = Image::make($image->getRealPath())->resize($width, null, function ($ratio) {
            $ratio->aspectRatio();
        });
        $thumb->save($newPath . "thumb/" . $filename);
        $image->move($newPath, $filename);
        return $filename;
    }
}