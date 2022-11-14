<?php

require_once 'autoload.php';

use Alura\Bank\Services\Authenticator;
use Alura\Bank\Models\Employee\{Director, Manager};
use Alura\Bank\Models\CPF;

$authenticator = new Authenticator();
$director = new Director("Gabriel", new CPF("192.522.837-14"), 3000);

$manager = new Manager("Gabriel", new CPF("192.522.837-14"), 5000);


$authenticator->Login($director, "1234");
$authenticator->Login($manager, "4321");
