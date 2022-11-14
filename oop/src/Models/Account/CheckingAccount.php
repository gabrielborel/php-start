<?php

namespace Alura\Bank\Models\Account;

class CheckingAccount extends Account
{

    public function __construct(Owner $owner)
    {
        parent::__construct($owner);
    }

    public function transfer(float $amount, Account &$targetAccount): void
    {
        if ($this->getBalance() < $amount) {
            echo "Insufficient funds to transfer" . PHP_EOL;
            return;
        }

        $this->withdraw($amount);
        $targetAccount->deposit($amount);
    }

    protected function getRate(): float
    {
        return 0.03;
    }
}