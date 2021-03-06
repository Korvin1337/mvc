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

        $data["graphic"] = array('<img src="https://i.imgur.com/RDTSQhn.png"/>', '<img src="https://i.imgur.com/8wRidUj.png"/>', '<img src="https://i.imgur.com/YEHAYON.png"/>', '<img src="https://i.imgur.com/T9Xov4F.png"/>', '<img src="https://i.imgur.com/U7K9ZaX.png"/>', '<img src="https://i.imgur.com/8rv32gM.png"/>');
        $data["graphicArray"] = array();

        $game21 = new Game21();
        $game21->roll();

        $game21Hand = new Game21Hand();
        $game21Hand->roll();

        $data["game21LastRoll"] = $game21->getLastRoll();
        $data["game21HandRoll"] = $game21Hand->getLastRoll();
        $data["theLastRoll"] = $game21->getLastRoll();

        array_push($data["graphicArray"], $game21Hand->getLastRoll());

        $body = renderView("layout/game21.php", $data);
        sendResponse($body);
    }
}
