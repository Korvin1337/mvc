<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;
$graphicDice = "";

$graphicDice .= $graphic[$graphicArray[0][0] - 1];
$graphicDice .= $graphic[$graphicArray[0][3] - 1];
$graphicDice .= $graphic[$graphicArray[0][6] - 1];
$graphicDice .= $graphic[$graphicArray[0][9] - 1];

?>

<h1><?= $header ?></h1>

<p><?= $message ?></p>

<!DOCTYPE html>
<html>

  <form action="" method="POST">
      <label>Number of Dices: (1-10000)</label><br />
      <input type="number" name="my_Dices" min="1" max="10000" value="1">
    <input type="submit" name="submit" value="Roll" class="btn"></button>
  </form>

</html>

<?php

if (isset($_POST['submit'])) {
    $diceArray = array();

    for ($i = 1; $i <= $_POST['my_Dices'] + 1; $i++) {
        $roller = rand (1, 6);
        array_push($diceArray, $roller);
    }

    for ($i = 1; $i < count($diceArray); $i++) {
        echo $graphic[$diceArray[$i] - 1];
    }
}

?>
