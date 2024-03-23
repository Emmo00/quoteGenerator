<?php

namespace App\Helpers;

class StripMarkup
{
    static function strip($input)
    {
        // Remove angle brackets and everything inside them
        $output = preg_replace('/<[^>]*>/', '', $input);
        return trim($output);
    }

}
