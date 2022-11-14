<?php

$grades = [
    [
        "student" => "Gabriel",
        "grade" => 10
    ],
    [
        "student" => "Pedro",
        "grade" => 5
    ],
    [
        "student" => "Jonas",
        "grade" => 7
    ]
];

echo "UN-ORDERED";
var_dump($grades);

function orderGrades(array $grade1, array $grade2): int
{
    return $grade2["grade"] <=> $grade1["grade"];
}

usort($grades, 'orderGrades');

echo "ORDERED";
var_dump($grades);
