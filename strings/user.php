<?php

$name = 'Gabriel Borel';
$email = 'gabrielborel@hotmail.com';
$end = strpos($email, '@');

$username = substr($email, 0, $end);

[$firstName, $secondName] = explode(' ', $name);

var_dump(implode(" ", [$firstName, $secondName]));

