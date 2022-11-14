<?php

namespace Alura\Bank\Models\Employee;

use Alura\Bank\Models\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function calculateBonus(): float
    {
        return $this->getSalary();
    }

    public function Login(string $password): bool
    {
        return $password === '4321';
    }
}