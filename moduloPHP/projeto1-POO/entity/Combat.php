<?php

require_once "Character.php";

class Combat
{

    public Character $attacker;
    public Character $defender;

    public function combatMenu(Character $attacker, Character $defender): void
    {
        $isActive = false;

        while (!$isActive) {

        clearScreen();

            echo " Turno de " . $attacker->getName() . "!\n";
            echo " HP: " . $attacker->getHealth() . " | Mana: " . $attacker->getMana() . "\n";
            echo " [1] - Atacar\n [2] - Curar\n";
            echo " [3] - Usar " . $attacker->getSkill_1() . "\n";
            echo " [4] - Usar " . $attacker->getSkill_2() . "\n";

            $choice = readline("-> Sua escolha: ");
            try {
                switch ($choice) {
                    case 1: $attacker->attack($defender);
                     break;
                    case 2: $attacker->heal();
                     break;
                    case 3: $attacker->useSkill_1($defender);
                     break;
                    case 4: $attacker->useSkill_2($defender);
                     break;
                    default:
                        echo "Opção inválida!\n";
                        readline("Pressione ENTER para escolher novamente");
                        continue 2;
                }
            } catch (Exception $e) {
                echo "Mana insuficiente! " . $e->getMessage() . "\n";
                readline("Pressione ENTER para escolher novamente");
                continue;
            }
            $isActive = true;
        }
    }

    public function startCombat(Character $char1, Character $char2)
    {
        $players = [$char1, $char2];
        $turn = 0;

        while ($char1->getHealth() > 0 && $char2->getHealth() > 0) {
            $attacker = $players[$turn];
            
            $defender = $players[1 - $turn];

            $this->combatMenu($attacker, $defender);

            $turn = 1 - $turn;
        }
    }

    function winnerMenu(Character $winner)
    {
        echo "Parabéns, " . $winner->getName() . "! Você venceu a batalha!\n";
        echo "Deseja jogar novamente? (s/n): ";
        $choice = readline("Sua escolha: ");
        
        if (strtolower($choice) === 's') {
            header("Location: index.php");
            exit();
        } else {
            echo "Obrigado por jogar! Até a próxima!\n";
            exit();
        }
    }
}
