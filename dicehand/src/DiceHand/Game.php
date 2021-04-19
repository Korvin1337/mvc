<?php

declare(strict_types=1);

namespace Korvin1337\DiceHand;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use Korvin1337\DiceHand\DiceHand;
use Korvin1337\DiceHand\DiceHandHand;


/**
 * Class Game.
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "Dice Hand",
            "message" => "Welcome to Dice Hand!",
        ];

        $data["graphic"] = array('<img src="https://i.imgur.com/RDTSQhn.png"/>', '<img src="https://i.imgur.com/8wRidUj.png"/>', '<img src="https://i.imgur.com/YEHAYON.png"/>', '<img src="https://i.imgur.com/T9Xov4F.png"/>', '<img src="https://i.imgur.com/U7K9ZaX.png"/>', '<img src="https://i.imgur.com/8rv32gM.png"/>');
        $data["graphicArray"] = array();

        $diceHand = new DiceHand();
        $diceHand->roll();

        $diceHandHand = new DiceHandHand();
        $diceHandHand->roll();

        $data["diceHandLastRoll"] = $diceHand->getLastRoll();
        $data["diceHandHandRoll"] = $diceHandHand->getLastRoll();
        $data["theLastRoll"] = $diceHand->getLastRoll();

        array_push($data["graphicArray"], $diceHandHand->getLastRoll());

        $body = renderView("layout/dicehand.php", $data);
        sendResponse($body);
    }
}
