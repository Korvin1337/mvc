<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Korvin1337\DiceHand\DiceHand;

$diceHand = new DiceHand();

for ($i = 0; $i <9; $i++) {
    $diceHand->roll();
    echo $diceHand->getLastRoll() . ", ";
}
