<?php

require_once "pdoConnect.php";

$sql = "INSERT INTO demo(name, colour, owned) "
    . "VALUES( :name, :colour, :owned)";

$statement = $pdo->prepare($sql);

$name = 'Skeletor';
$colour = 'Gray';
$owned = 0; // used in place of FALSE (1 = TRUE)

$statement->execute([
    "name" => $name,
    "colour" => $colour,
    "owned" => $owned,
]);