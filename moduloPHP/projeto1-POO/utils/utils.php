<?php

function clearScreen()
{
    // if (PHP_OS_FAMILY === 'Linux') {
    //     system('clear');
    // } else {
    //     system('cmd /c cls');
    // }

    for ($i = 0; $i < 20; $i++) {
        echo "\n";
    }

}

function line()
{
    echo "=====================================\n";
}
