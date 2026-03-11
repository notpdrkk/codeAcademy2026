<?php

require_once "./entity/Character.php";
require_once "./entity/Mage.php";
require_once "./views/mainMenu.php";
require_once "./entity/Rogue.php";
require_once "./entity/Player.php";
require_once "./entity/Warrior.php";
require_once "./entity/Combat.php";

mainMenu();

$player1 =  charSelector();
$player2 = charSelector();

var_dump($player1);
var_dump($player2);

$player1->attack($player2);
$player1->decreaseHealth($player2, $player1->getAtkDamage());

var_dump($player2);

