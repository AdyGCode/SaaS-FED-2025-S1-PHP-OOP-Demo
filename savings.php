<?php
/**
 * Savings Demo
 *
 * Filename:     savings.php
 *  Author:      Adrian Gould
 *  Date:        2025-02-26
 */

require_once 'SavingsAccount.php';

$account = new SavingsAccount(0,10); // No Balance, 10% interest
$account->deposit(10000); // $100.00
echo "<p>Balance: ".$account->getBalance()."</p>";

$account->setInterestRate(5); // 5% interest rate
$account->addInterest();
echo "<p>New Balance: ".$account->getBalance()."</p>";
