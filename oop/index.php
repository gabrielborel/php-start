<?php

require_once 'autoload.php';

use Alura\Bank\Models\{CPF, Address};
use Alura\Bank\Models\Account\{InsufficientFundsException, Owner, CheckingAccount, SavingAccount};

$CPF = new CPF("192.522.837-14");
$address = new Address("Volta Redonda", "14", "Jardim Vila Rica - Tiradentes", "86");
$owner = new Owner("Gabriel", $CPF, $address);
$account = new CheckingAccount($owner);

try {
    $account->deposit(-200);
} catch(InvalidArgumentException $exception) {
    echo $exception->getMessage() . PHP_EOL;
} finally {
    echo "Finalmente" . PHP_EOL;
}

var_dump($account->getBalance());
