<?php

require_once "./entity/Character.php";
require_once "./entity/Mage.php";
require_once "./views/mainMenu.php";
require_once "./entity/Rogue.php";
require_once "./entity/Player.php";
require_once "./entity/Warrior.php";
require_once "./entity/Combat.php";

mainMenu();

$player1 = new Player(1, charSelector());
$player2 = new Player(2, charSelector());
$combat = new Combat();

while ($player1->getChar()->getHealth() > 0 && $player2->getChar()->getHealth() > 0) {
    $combat->startCombat($player1->getChar(), $player2->getChar());
    $combat->combatMenu($player1->getChar(), $player2->getChar());
}

$combat->winnerMenu($player1->getChar()->getHealth() > 0 ? $player1->getChar() : $player2->getChar());
