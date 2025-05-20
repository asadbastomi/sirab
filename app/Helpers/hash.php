<?php

use Illuminate\Support\Facades\Hash;

function useHas($string)
{
    if (!empty($string) && $string !== null) {

        $hashedString = Hash::make($string);

        return $hashedString;
    }
    return;
}
