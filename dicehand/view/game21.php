<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$header = $header ?? null;
$message = $message ?? null;


?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<!DOCTYPE html>
<html>

  <form action="game21playone" method="POST">
    <input type="submit" name="playGame" value="One Dice" class="btn"></button>
  </form>

  <form action="game21playtwo" method="POST">
    <br />
    <input type="submit" name="playGame" value="Two Dice" class="btn"></button>
  </form>

</html>
