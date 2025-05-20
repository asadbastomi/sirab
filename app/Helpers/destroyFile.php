<?php

use Illuminate\Support\Facades\Storage;

function useDestroyFile($folder, $path)
{
    $folderPath = '/public/' . $folder . '/' . $path;
    if (Storage::exists($folderPath)) {


        Storage::delete($folderPath);
        /*
            Delete Multiple File like this way
            Storage::delete(['upload/test.png', 'upload/test2.png']);
        */
    } else {
        return;
    }
}