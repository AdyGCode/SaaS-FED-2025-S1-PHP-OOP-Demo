<?php
/**
 * Demonstrate Reading a Record with PDO
 *
 * Filename:        pdo-demo-read-2.php
 */

require_once 'pdoConnect.php';

$sql1 = "SELECT id, name, colour, owned "
    . "FROM demo WHERE colour LIKE 'Bl%'";

$sql2 = "SELECT id, name, colour, owned "
    . "FROM demo WHERE colour LIKE 'G%'";

$statement1 = $pdo->prepare($sql1);
$statement1->execute();
$results1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

$statement2 = $pdo->prepare($sql2);
$statement2->execute();
$results2 = $statement2->fetchAll(PDO::FETCH_ASSOC);

$results = array_merge($results1, $results2);


//echo "<pre>";
//print_r($results);
//echo "</pre>";

?>
<ul>
    <?php
    foreach ($results as $result) {
        ?>
        <li><?= $result['id'] ?>)
            <?= $result['name'] ?>
            [<?= $result['colour'] ?>]
            [<?= $result['owned'] ? "Y" : "N" ?>]
        </li>
        <?php
    }
    ?>
</ul>
