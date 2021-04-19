<?php

declare(strict_types=1);

namespace Korvin1337\GraphicalDice;

/**
 * Class GraphicalDiceHand.
 */
class GraphicalDiceHand
{
    private array $graphicaldices;
    private int $sum;

    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
            $this->graphicaldices[$i] = new GraphicalDice();
        }

    }

    public function roll(): void
    {
        $len = count($this->graphicaldices);

        $this->sum = 0;
        for ($i = 0; $i <= 3; $i++) {
            $this->sum += $this->graphicaldices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 3; $i++) {
            $res .= $this->graphicaldices[$i]->getLastRoll() . ", ";
        }

        return $res . " = " . $this->sum;
    }
}
