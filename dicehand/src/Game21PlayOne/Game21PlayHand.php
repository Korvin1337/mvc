<?php

declare(strict_types=1);

namespace Korvin1337\Game21PlayOne;

/**
 * Class Game21PlayHand.
 */
class Game21PlayHand
{
    private array $game21plays;
    private int $sum;

    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
            $this->game21plays[$i] = new Game21Play();
        }

    }

    public function roll(): void
    {
        $len = count($this->game21plays);

        $this->sum = 0;
        for ($i = 0; $i <= 3; $i++) {
            $this->sum += $this->game21plays[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 3; $i++) {
            $res .= $this->game21plays[$i]->getLastRoll() . ", ";
        }

        return $res . " = " . $this->sum;
    }
}
