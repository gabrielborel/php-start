<?php

function withdraw(array &$account, float $amount): void
{
    if ($amount > $account["balance"]) {
        echo "Insufficient funds";
    } else {
        $account["balance"] -= $amount;
    }
}

function deposit(array &$account, float $amount): void
{
    if ($amount <= 0) {
        echo "Invalid deposit value";
    } else {
        $account["balance"] += $amount;
    }
}
