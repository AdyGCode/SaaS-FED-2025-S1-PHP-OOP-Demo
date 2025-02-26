<?php
/**
 * Savings Demo
 *
 * Filename:     savings.php
 *  Author:      Adrian Gould
 *  Date:        2025-02-26
 *
 * References:
 * https://www.phptutorial.net/php-oop/php-inheritance/
 * https://www.phptutorial.net/php-oop/php-call-parent-constructor/
 * https://www.phptutorial.net/php-oop/php-override-method/
 * https://www.phptutorial.net/php-oop/php-override-method/
 * https://www.phptutorial.net/php-oop/php-protected/
 *
 * https://learning.oreilly.com/course/object-oriented-php/9781789533149/
 * Chapter 1, Chapter 2
 */

require_once 'SavingsAccount.php';

$account = new SavingsAccount(0,10); // No Balance, 10% interest
$account->deposit(10000); // $100.00
echo "<p>Balance: ".$account->getBalance()."</p>";

$account->setInterestRate(5); // 5% interest rate
$account->addInterest();
echo "<p>New Balance: ".$account->getBalance()."</p>";
