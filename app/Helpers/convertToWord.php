<?php
function convertToWords($number)
{
    $words = [
        1 => 'KESATU',
        2 => 'KEDUA',
        3 => 'KETIGA',
        4 => 'KEEMPAT',
        5 => 'KELIMA',
        6 => 'KEENAM',
        7 => 'KETUJUH',
        8 => 'KEDELAPAN',
        9 => 'KESEMBILAN',
        10 => 'KESEPULUH',
        11 => 'KESEBELAS',
        12 => 'KEDUA BELAS',
        13 => 'KETIGA BELAS',
        14 => 'KEEMPAT BELAS',
        15 => 'KELIMA BELAS',
        16 => 'KEENAM BELAS',
        17 => 'KETUJUH BELAS',
        18 => 'KEDELAPAN BELAS',
        19 => 'KESEMBILAN BELAS',
        20 => 'KEDUA PULUH',
    ];

    // Pastikan angka ada dalam daftar
    if (isset($words[$number])) {
        return $words[$number];
    }

    // Kembalikan angka asli jika tidak ditemukan dalam daftar
    return $number;
}

function convertToAlphabet($number)
{
    // Define the alphabet
    $alphabet = range('a', 'z');

    // Ensure the input number is within the valid range
    if ($number < 1 || $number > 26) {
        return "Number must be between 1 and 26";
    }

    // Slice the alphabet array to get the required number of letters
    $letters = array_slice($alphabet, 0, $number);

    // If there's only one letter, return it directly
    if (count($letters) == 1) {
        return $letters[0];
    }

    // Remove the last letter
    $last_letter = array_pop($letters);

    // Join the remaining letters with ', ', and append 'dan ' before the last letter
    return implode(', huruf ', $letters) . ' dan huruf ' . $last_letter;
}
