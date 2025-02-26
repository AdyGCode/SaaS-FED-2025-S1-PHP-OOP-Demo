<?php
require_once "BankAccount.php";

class SavingsAccount extends BankAccount
{
    private int $interestRate;

    public function __construct(int $balance, int $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate(int $interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interest = $this->interestRate * $this->getBalance() / 100;
        $this->deposit($interest);
    }
}