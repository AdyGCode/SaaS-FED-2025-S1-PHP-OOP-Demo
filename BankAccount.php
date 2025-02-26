<?php

class BankAccount
{
    private int $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance() : int
    {
        return $this->balance;
    }

    public function deposit( int $amount)
    {
        if ($amount > 0 ) {
            $this->balance += $amount;
        }

        return $this;
    }
}