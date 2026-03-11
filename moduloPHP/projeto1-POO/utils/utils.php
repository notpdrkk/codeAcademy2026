<?php

function clearScreen()
{
    if (PHP_OS_FAMILY === 'Linux') {
        system('clear');
    } else {
        system('cls');
    }
}

echo PHP_OS_FAMILY;