<?php

function clearScreen(){
    if (PHP_OS_FAMILY == "Windows") {
        system('cls');
    } else {
        system('clear');
    }
}

function line()
{
    echo "=====================================\n";
}
