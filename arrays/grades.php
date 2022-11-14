<?php

$grades = [
    10,
    5,
    7,
    9
];

rsort($grades);

var_dump(array_is_list($grades));

var_dump(array_key_exists(2, $grades));

var_dump(in_array(11, $grades));

echo array_search(9, $grades);

var_dump($grades);
