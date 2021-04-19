<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Korvin1337\GraphicalDice\GraphicalDice;

$graphicalDice = new GraphicalDice();

for ($i = 0; $i <9; $i++) {
    $graphicalDice->roll();
    echo $graphicalDice->getLastRoll() . ", ";
}
