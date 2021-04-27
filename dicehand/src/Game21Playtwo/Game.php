<?php

declare(strict_types=1);

namespace Korvin1337\Game21PlayTwo;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use Korvin1337\Game21PlayTwo\Game21Play;
use Korvin1337\Game21PlayTwo\Game21PlayHand;

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

        $data["graphic"] = array('<img src="https://i.imgur.com/RDTSQhn.png"/>', '<img src="https://i.imgur.com/8wRidUj.png"/>', '<img src="https://i.imgur.com/YEHAYON.png"/>', '<img src="https://i.imgur.com/T9Xov4F.png"/>', '<img src="https://i.imgur.com/U7K9ZaX.png"/>', '<img src="https://i.imgur.com/8rv32gM.png"/>');
        $data["graphicArray"] = array();

        $game21play = new Game21Play();
        $game21play->roll();

        $game21playHand = new Game21PlayHand();
        $game21playHand->roll();

        $data["game21playLastRoll"] = $game21play->getLastRoll();
        $data["game21playHandRoll"] = $game21playHand->getLastRoll();
        $data["theLastRoll"] = $game21play->getLastRoll();

        array_push($data["graphicArray"], $game21playHand->getLastRoll());

        $body = renderView("layout/game21playtwo.php", $data);
        sendResponse($body);
    }
}
