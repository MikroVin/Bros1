<?php

function filter($items, $key, $value) {
    $filtered = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filtered[] = $item;
        }
    }
    return $filtered;
};