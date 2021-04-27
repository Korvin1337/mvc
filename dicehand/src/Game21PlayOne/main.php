<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Korvin1337\Game21play\Game21Play;

$game21playone = new Game21Play();

for ($i = 0; $i <9; $i++) {
    $game21playone->roll();
    echo $game21playone->getLastRoll() . ", ";
}
