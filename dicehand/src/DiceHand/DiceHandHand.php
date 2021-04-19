<?php

declare(strict_types=1);

namespace Korvin1337\DiceHand;

/**
 * Class DiceHandHand.
 */
class DiceHandHand
{
    private array $diceHanddices;
    private int $sum;

    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
            $this->diceHanddices[$i] = new DiceHand();
        }

    }

    public function roll(): void
    {
        $len = count($this->diceHanddices);

        $this->sum = 0;
        for ($i = 0; $i <= 3; $i++) {
            $this->sum += $this->diceHanddices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 3; $i++) {
            $res .= $this->diceHanddices[$i]->getLastRoll() . ", ";
        }

        return $res . " = " . $this->sum;
    }
}
