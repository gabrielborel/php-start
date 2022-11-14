<?php

require_once 'autoload.php';

use Alura\Bank\Models\CPF;
use Alura\Bank\Models\Employee\{Director, Manager, Developer};
use Alura\Bank\Services\BonusController;

$bonusesController = new BonusController();
$gabriel = new Manager("Gabriel", new CPF("192.522.837-14"), 1000);
$gabriel2 = new Director("Gabriel", new CPF("192.522.837-14"), 1000);
$gabriel3 = new Developer("Gabriel", new CPF("192.522.837-14"), 1000);

$bonusesController->addBonus($gabriel);
$bonusesController->addBonus($gabriel2);
$bonusesController->addBonus($gabriel3);

var_dump($bonusesController->getTotal());
var_dumop($gabriel->)
