<?php

use Carbon\Carbon;
use Carbon\CarbonInterface;

function useCarbon($date, $format = null)
{
    $formatDate = Carbon::parse($date)->translatedFormat('d F Y');
    if ($format) {
        $formatDate = Carbon::parse($date)->translatedFormat($format);
    }

    return $formatDate;
}

function useDiff($diff, $startDate, $endDate = null)
{
    $start = Carbon::parse($startDate);
    $end = Carbon::parse($endDate);
    $now = Carbon::now();
    switch ($diff) {
        case 'month':
            return $start->diffInMonths($end);
            break;

        case 'hour':
            return round($start->diffInHours($end));
            break;

        case 'day':
            return round($start->diffInDays($end));
            break;

        case 'format':
            $options = [
                'join' => ', ',
                'parts' => 2,
                'syntax' => CarbonInterface::DIFF_ABSOLUTE,
            ];

            return $end->diffForHumans($start, $options);
            // return round($start->diffInDays($end));
            break;

        default:
            return $start->diffForHumans($now);
            break;
    }
}

function getDateNow($format)
{
    $date = Carbon::now();
    $formatDate = Carbon::parse($date)->translatedFormat($format);

    return $formatDate;
}

function getDateFromYear($year)
{
    $nowWithSpecificYear = Carbon::now()->year($year);

    return $nowWithSpecificYear;
}

function startOfYear($year)
{
    $dt = Carbon::create($year, 1, 1, 12, 0, 0);
    return $dt->startOfYear();
}

function getRangeYear($startDate, $endDate)
{
    // dd($startDate);
    $parseStartDate = Carbon::parse($startDate)->year;
    $parseEndDate = Carbon::parse($endDate)->year;
    $years = range($parseStartDate, $parseEndDate);

    return $years;
}

function getIsoFormat($date, $format)
{
    $parseDate = Carbon::parse($date)->isoFormat($format);

    return $parseDate;
}
