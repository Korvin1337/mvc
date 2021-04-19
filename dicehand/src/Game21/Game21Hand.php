<?php

declare(strict_types=1);

namespace Korvin1337\Game21;

/**
 * Class Game21Hand.
 */
class Game21Hand
{
    private array $game21s;
    private int $sum;

    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
            $this->game21s[$i] = new Game21();
        }

    }

    public function roll(): void
    {
        $len = count($this->game21s);

        $this->sum = 0;
        for ($i = 0; $i <= 3; $i++) {
            $this->sum += $this->game21s[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 3; $i++) {
            $res .= $this->game21s[$i]->getLastRoll() . ", ";
        }

        return $res . " = " . $this->sum;
    }
}
