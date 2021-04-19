<?php

declare(strict_types=1);

namespace Korvin1337\GraphicalDice;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use Korvin1337\GraphicalDice\GraphicalDice;
use Korvin1337\GraphicalDice\GraphicalDiceHand;


/**
 * Class Game.
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "Graphical Dice",
            "message" => "Welcome to graphical dice!",
        ];

        $data["graphic"] = array('<img src="https://i.imgur.com/RDTSQhn.png"/>', '<img src="https://i.imgur.com/8wRidUj.png"/>', '<img src="https://i.imgur.com/YEHAYON.png"/>', '<img src="https://i.imgur.com/T9Xov4F.png"/>', '<img src="https://i.imgur.com/U7K9ZaX.png"/>', '<img src="https://i.imgur.com/8rv32gM.png"/>');
        $data["graphicArray"] = array();

        $graphicalDice = new GraphicalDice();
        $graphicalDice->roll();

        $graphicalDiceHand = new GraphicalDiceHand();
        $graphicalDiceHand->roll();

        $data["graphicalDiceLastRoll"] = $graphicalDice->getLastRoll();
        $data["graphicalDiceHandRoll"] = $graphicalDiceHand->getLastRoll();
        $data["theLastRoll"] = $graphicalDice->getLastRoll();

        array_push($data["graphicArray"], $graphicalDiceHand->getLastRoll());

        $body = renderView("layout/graphicaldice.php", $data);
        sendResponse($body);
    }
}
