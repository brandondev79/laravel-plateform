<?php

if (!function_exists('array_clone')) {

    /**
     * description
     *
     * @param array $array
     * @param int $length
     * @return array
     */
    function array_clone($array, $length)
    {
        return array_flatten(array_fill(0, $length, $array));
    }
}

if (!function_exists('array_next')) {

    /**
     * description
     *
     * @param array $array
     * @param int $length
     * @param int $next
     * @return string
     */
    function array_next($array, $length, $next)
    {
        $clone = array_clone($array, $length);
        return $clone[$next];
    }
}

if (!function_exists('is_route')) {

    /**
     * Check current route is active or not
     *
     * @param string $name
     * @return boolean
     */
    function is_route($name)
    {
        return \Illuminate\Support\Facades\Request::is(ltrim(route($name, array(), false), '/'));
    }
}

if (!function_exists('company_name')) {

    /**
     * get the company name
     *
     * @param string $name
     * @return boolean
     */
    function company_name($name)
    {
        return strtolower(current(explode(' ', $name)));
    }
}

if (!function_exists('public_path')) {

    /**
     * get the public path
     *
     * @param string $name
     * @return boolean
     */
    function public_path($path)
    {
        return base_url().'/public/'.$path;
    }
}