<?php

$banner = "Home";

$books = [
    [
        "name" => "monkey in a jungle",
        "author" => "gimme",
        "year" => 2010
    ],
    [
        "name" => "monkey in a city",
        "author" => "gimme",
        "year" => 2009
    ],
    [
        "name" => "dora in a jungle",
        "author" => "gimme",
        "year" => 2009
    ]
];

$filter = function($items, $key, $value) {
    $filtered = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filtered[] = $item;
        }
    }
    return $filtered;
};

require 'views/index.view.php';