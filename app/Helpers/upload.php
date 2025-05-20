<?php
function upload($folder, $file, $field, $oldPath = null)
{
    // $defaultPath = ['default.jpg', 'default.png'];
    if ($oldPath) {
        // $check1 = strpos($oldPath, $defaultPath[0]);
        // $check2 = strpos($oldPath, $defaultPath[1]);
        // dd($check1, $check2);
        if ($oldPath != 'default.jpg' || $oldPath = 'default.png') {
            useDestroyFile($folder, $oldPath);
        }
    }
    $name = $file->file($field)->getClientOriginalName();

    $file->file($field)->storeAs('public/', $folder . '/' . $name);

    return $name;
}