<?php

if (!function_exists('is_now')) {

    /**
     * Check date is from now or not
     *
     * @param string $date
     * @return boolean
     */
    function is_now($date)
    {
        return Carbon::now() < Carbon::parse($date);
    }
}

if (!function_exists('date_string')) {

    /**
     * Convert date to string
     *
     * @param string $date
     * @return string
     */
    function date_string($date)
    {
        return Carbon::parse($date)->formatLocalized('%b %Y');
    }
}
