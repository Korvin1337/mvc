<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<p>Last roll:</p>

<p><?= $game21LastRoll ?></p>

<p>Dice Hand</p>

<p><?= $game21HandRoll ?></p>
<p><?= $game21HandRoll1 ?></p>
