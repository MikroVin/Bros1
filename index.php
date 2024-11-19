<?php
require "modules/dd.php";
require "modules/filter.php";
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


require 'views/index.view.php';