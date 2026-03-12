<?php

function clearScreen (){

    (PHP_OS_FAMILY === 'Windows') ? system('cls') : system('clear');
    
}

function line()
{
    echo "=====================================\n";
}
