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