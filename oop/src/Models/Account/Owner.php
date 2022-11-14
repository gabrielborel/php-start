<?php

namespace Alura\Bank\Models\Account;

use Alura\Bank\Models\{Person, CPF, Address};

class Owner extends Person
{
    public function __construct(
        string          $name,
        CPF             $cpf,
        private Address $address,
    )
    {
        parent::__construct($name, $cpf);
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}