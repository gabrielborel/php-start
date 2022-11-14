<?php

namespace Alura\Bank\Models\Employee;

use Alura\Bank\Models\Authenticable;

class Director extends Employee implements Authenticable
{
    public function calculateBonus(): float
    {
        return $this->getSalary() * 2;
    }

    public function Login(string $password): bool
    {
        return $password === '1234';
    }
}