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

<p> ----------------------------------------- </p>

<?php
    $graphicDice .= $graphic[$graphicArray[0][0] - 1];
    $graphicDice .= $graphic[$graphicArray[0][3] - 1];
    $graphicDice .= $graphic[$graphicArray[0][6] - 1];
    $graphicDice .= $graphic[$graphicArray[0][9] - 1];
?>

<!DOCTYPE html>
<html>

  <form action="" method="POST">
      <input type="hidden" name="my_Faces" min="6" max="6" value="6">
    <input type="submit" name="submit" value="Roll" class="btn"></button>
  </form>

</html>

<?php

if (isset($_POST['submit'])) {
    $roller = rand (1, intval($_POST['my_Faces']));

    echo "Spartacus Rolls: " . $graphic[$roller - 1] . "!";
}
?>
<p> ----------------------------------------- </p>
<p>Graphical Dice:</p>

<p><?= $graphicDice ?> </p>
