<?php

namespace Alura\Bank\Models\Account;

use Alura\Bank\Models\Account\InsufficientFundsException;
use InvalidArgumentException;

abstract class Account
{
    private static int $accountNumbers = 0;
    private int $balance = 0;

    public function __construct(
        private readonly Owner $owner,
    )
    {
        self::$accountNumbers++;
    }

    public static function getAccountNumbers(): int
    {
        return self::$accountNumbers;
    }

    public function __destruct()
    {
        self::$accountNumbers--;
    }

    public function withdraw(float $amount): void
    {
        $tax = $amount * $this->getRate();
        $amount += $tax;
        if ($this->balance < $amount) {
            throw new InsufficientFundsException($amount, $this->balance);
        }

        $this->balance -= $amount;
    }

    public function deposit(float $amount): void
    {
        if ($amount < 0) {
            throw new InvalidArgumentException("Valor a depositar precisa ser positivo");
        }

        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getOwner(): Owner
    {
        return $this->owner;
    }

    abstract protected function getRate(): float;
}
