<?php

namespace Alura\Bank\Models\Employee;

class Developer extends Employee
{

    public function calculateBonus(): float
    {
        return 500;
    }
}