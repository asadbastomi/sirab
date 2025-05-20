<?php
function getCategory($value)
{
    switch (true) {
        case ($value >= 91):
            return "Sangat Tinggi";
        case ($value >= 76):
            return "Tinggi";
        case ($value >= 66):
            return "Sedang";
        case ($value >= 51):
            return "Rendah";
        default:
            return "Sangat Rendah";
    }

    return $value;
}
