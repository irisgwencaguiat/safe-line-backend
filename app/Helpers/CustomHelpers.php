<?php

if (!function_exists('customResponse')) {
    function customResponse($data = NULL, $message = NULL)
    {
        return new \App\Helpers\ExtendedResponse($data, $message);
    }
}
