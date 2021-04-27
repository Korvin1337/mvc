<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Korvin1337\Game21PlayTwo\Game21Play;

$game21playtwo = new Game21Play();

for ($i = 0; $i <9; $i++) {
    $game21playtwo->roll();
    echo $game21playtwo->getLastRoll() . ", ";
}
