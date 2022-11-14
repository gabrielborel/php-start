<?php

namespace Alura\Bank\Services;

use Alura\Bank\Models\Employee\Employee;

class BonusController
{
    private $totalBonus = 0;

    public function addBonus(Employee $employee): void
    {
        $this->totalBonus += $employee->calculateBonus();
    }

    public function getTotal(): float
    {
        return $this->totalBonus;
    }
}
