<?php
/**
 * Gamer App
 *
 * Filename:     gamer.php
 *  Author:      Adrian Gould
 *  Date:        2025-02-26
 */

require_once 'Game.php';

$game1 = new Game(
    "Munchkin",
    "Competitive Role-Playing Card"
);

// $game1->count = 1; // cannot directly change protected properties
// $game1->name = "OOK"; // cannot directly change private properties

echo "<p>";
echo $game1->details();
echo "</p>";

$game2 = new Game("","Board game");

echo "<p>";
echo $game2->details();
echo "</p>";

if ($game2->setName("Monopoly")){

echo "<p>";
echo $game2->details();
echo "</p>";

} else {
    echo "<p>ERROR, Name not set</p>";
};

