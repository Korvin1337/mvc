<?php

declare(strict_types=1);

namespace Korvin1337\Game21;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use Korvin1337\Game21\Game21;
use Korvin1337\Game21\Game21Hand;


/**
 * Class Game.
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "Game21",
            "message" => "Welcome to game21!",
        ];

        $game21 = new Game21();
        $game21->roll();

        $game21Hand = new Game21Hand();
        $game21Hand->roll();

        $data["game21LastRoll"] = $game21->getLastRoll();
        $data["game21HandRoll"] = $game21Hand->getLastRoll();

        $game21Hand->roll();
        $data["game21HandRoll1"] = $game21Hand->getLastRoll();

        $body = renderView("layout/game21.php", $data);
        sendResponse($body);
    }
}
