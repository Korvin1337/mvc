<?php

declare(strict_types=1);

namespace Korvin1337\Dice;

/**
 * Class Dice.
 */
class Dice
{
    const FACES = 6;

    public function roll(): int
    {
        $this->roll = rand (1, self::FACES);

        return $this->roll;
    }

    public function postRoll($my_Faces): int
    {
        $this->roll = rand (1, self::my_Faces);

        return $this->roll;
    }

    public function getLastRoll(): int
    {
        return $this->roll;
    }
}
