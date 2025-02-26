<?php
/**
 * Demonstrate Reading a Record with PDO
 *
 * Filename:        pdo-demo-read.php
 */

require_once 'pdoConnect.php';

$sql = "SELECT id, name, colour, owned "
    ."FROM demo";

$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo "<pre>";
//print_r($results);
//echo "</pre>";

?>
<ul>
    <?php
        foreach($results as $result){
    ?>
    <li><?=$result['id'] ?>)
        <?=$result['name'] ?>
        [<?=$result['colour'] ?>]
        [<?=$result['owned'] ? "Y" : "N" ?>]
    </li>
    <?php
        }
    ?>
</ul>
