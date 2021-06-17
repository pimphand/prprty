<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public static function image($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/image/' . $oldName);
        }
        Storage::putFileAs("public/image", $image, $name);
    }

    public static function video($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/video/' . $oldName);
        }
        Storage::putFileAs("public/video", $image, $name);
    }

    public static function room($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/room/' . $oldName);
        }
        Storage::putFileAs("public/room", $image, $name);
    }

    public static function news($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/news/' . $oldName);
        }
        Storage::putFileAs("public/news", $image, $name);
    }

    public static function slider($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/slider/' . $oldName);
        }
        Storage::putFileAs("public/slider", $image, $name);
    }
}
