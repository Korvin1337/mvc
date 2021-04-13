<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

use Korvin1337\Dice\DiceHand;

$header = $header ?? null;
$message = $message ?? null;

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<p>Dice Hand</p>

<p><?= $diceHand->getLastRoll() ?></p>
