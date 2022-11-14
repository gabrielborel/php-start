<?php

$grades1 = [
    'Gabriel' => 10,
    'Pedro' => 5,
    'Jonas' => 7,
    'Jorge' => 9
];

$grades2 = [
    'Gabriel' => 10,
    'Pedro' => 7,
    'Jonas' => 8,
    'Jorge' => 9
];

var_dump(array_diff_assoc($grades1, $grades2));
