<?php

namespace Alura\Bank\Models\Account;

class InsufficientFundsException extends \DomainException
{
    public function __construct(float $amount, float $balance)
    {
        $message = "Voce tentou sacar: {$amount}, mas tem apenas: {$balance}" . PHP_EOL;

        parent::__construct($message);
    }
}