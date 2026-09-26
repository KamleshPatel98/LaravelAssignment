<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists("uploadFile")) {
    function uploadFile($file, $path)
    {
        if (!$file) {
            return null;
        }

        $filename = time() . '_' . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();

        // Store file in storage/app/public/{path}
        $file->storeAs($path, $filename);

        return $filename;
    }
}

if (!function_exists("deleteFile")) {
    function deleteFile($filename, $path)
    {
        if (!empty($filename) && Storage::exists($path . $filename)) {
            Storage::delete($path . $filename);
        }
    }
}