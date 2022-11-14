<?php

namespace Alura\Bank\Models\Employee;

use Alura\Bank\Models\CPF;
use Alura\Bank\Models\Person;

abstract class Employee extends Person
{
    public function __construct(
        string         $name,
        CPF            $cpf,
        private string $salary
    )
    {
        parent::__construct($name, $cpf);
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function changeName(string $name): void
    {
        $this->name = $name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    abstract protected function calculateBonus(): float;
}
