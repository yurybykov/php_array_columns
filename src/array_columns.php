<?php

if (!function_exists('array_columns')) {
    function array_columns(array &$array, array $keys)
    {
        $result = [];

        foreach ($array as $key => &$value) {
            if (in_array($key, $keys)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
