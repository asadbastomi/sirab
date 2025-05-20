<?php

use Illuminate\Support\Facades\Auth;

function useGetAuth()
{
    $auth = Auth::user();

    return $auth;
}