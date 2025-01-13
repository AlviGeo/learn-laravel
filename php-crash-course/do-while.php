<?php

do {
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";
    if(6 == $diceRoll) {
        echo "Congrats! You rolled a 6!\n";
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
} while ("y" == $rollAgain);