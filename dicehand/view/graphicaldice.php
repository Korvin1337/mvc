<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;
$graphicDice = "";

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<?php
    $graphicDice .= $graphic[$graphicArray[0][0] - 1];
    $graphicDice .= $graphic[$graphicArray[0][3] - 1];
    $graphicDice .= $graphic[$graphicArray[0][6] - 1];
    $graphicDice .= $graphic[$graphicArray[0][9] - 1];
?>

<p>Last roll:</p>

<p><?= $graphic[$theLastRoll - 1]?></p>

<p>Graphical Dice:</p>

<p><?= $graphicDice ?> </p>
