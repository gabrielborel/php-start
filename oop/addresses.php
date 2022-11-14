<?php

require_once 'autoload.php';

use Alura\Bank\Models\Address;

$address1 = new Address("VR", "14", "VilaRica", '86');
$address2 = new Address("VR", "86", "Vila", '14');

echo $address1->number;