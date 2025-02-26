<?php
/**
 * Basics of PDO
 *
 * Filename:        pdoConnect.php
 * Date Created:    2025-02-26
 */

require_once 'config.php';

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=UTF8";

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS);

    if ($pdo) {
        echo "<p>Connection to DB Successful.";
    }
} catch (PDOException $error) {
    echo "<p>".$error->getMessage()."</p>";
}