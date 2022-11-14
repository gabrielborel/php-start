<?php

namespace Alura\Bank\Models\Account;

class SavingAccount extends Account
{
    public function __construct(Owner $owner)
    {
        parent::__construct($owner);
    }

    protected function getRate(): float
    {
        return 0.05;
    }
}
