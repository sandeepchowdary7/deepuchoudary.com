<?php

if (! function_exists('number_format_locale')) {

    function number_format_locale(int $number): string
    {
        if ($number < 1000000) {
            $number = number_format($number);
        } else if ($number < 1000000000) {
            $number = number_format($number / 1000000, 3) . 'M';
        } else {
            $number = number_format($number / 1000000000, 3) . 'B';
        }

        return $number;
    }
}
