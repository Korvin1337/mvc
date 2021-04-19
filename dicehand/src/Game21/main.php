<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Korvin1337\Game21\Game21;

$game21 = new Game21();

for ($i = 0; $i <9; $i++) {
    $game21->roll();
    echo $game21->getLastRoll() . ", ";
}
