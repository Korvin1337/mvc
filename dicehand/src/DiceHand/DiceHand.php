<?php

declare(strict_types=1);

namespace Korvin1337\DiceHand;

/**
 * Class DiceHand.
 */
class DiceHand
{
    const FACES = 6;

    private ?int $roll = null;

    public function roll(): int
    {
        $this->roll = rand (1, self::FACES);

        return $this->roll;
    }

    public function getLastRoll(): int
    {
        return $this->roll;
    }
}
