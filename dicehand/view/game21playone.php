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

$graphicDice = "";
$playerRollsArray = array();

$graphicDice .= $graphic[$graphicArray[0][0] - 1];
$graphicDice .= $graphic[$graphicArray[0][3] - 1];
$graphicDice .= $graphic[$graphicArray[0][6] - 1];
$graphicDice .= $graphic[$graphicArray[0][9] - 1];

?>

<h1><?= $header ?></h1>

<p><?= $message ?></p>

<!DOCTYPE html>
<html>

  <form method="POST" action="">
    <button name="submit" type="submit" value="Roll Dice" class="btn">Roll</button>
    <button name="stay" type="submit" value=1 class="btn">Stay</button>
  </form>

</html>

<?php
if (isset($_POST['stay'])) {
    if ($_SESSION['thisRollers'] == 21) {
        if ($_SESSION['computerRolls'] != 21) {
            echo '<script>alert("Grattis!!! Du fick 21!")</script>';
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else {
            echo " Attans datorn fick också 21!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        }
    } else if ($_SESSION['computerRolls'] > 21 && $_SESSION['thisRollers'] < 21) {
        echo " Du vann!";
        echo " Datorn blev tjock.";
        echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
        echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
        $_SESSION['thisRollers'] = 0;
        $_SESSION['computerRolls'] = 0;
    } else if ($_SESSION['computerRolls'] > 21 && $_SESSION['thisRollers'] > 21) {
        echo " Du vann!";
        echo " Datorn blev tjock.";
        echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
        echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
        $_SESSION['thisRollers'] = 0;
        $_SESSION['computerRolls'] = 0;
    } else if ($_SESSION['computerRolls'] < 21) {
        if ($_SESSION['computerRolls'] > $_SESSION['thisRollers']) {
            echo " Du Förlorade!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else if ($_SESSION['computerRolls'] < $_SESSION['thisRollers'] && $_SESSION['thisRollers'] < 21) {
            echo " Du vann!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else if ($_SESSION['computerRolls'] < $_SESSION['thisRollers'] && $_SESSION['thisRollers'] > 21) {
            echo " Du Förlorade!";
            echo "<br>" . "Du blev tjock med poängen: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else {
            echo " Det blev lika!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        }
    }
}

if (isset($_POST['submit'])) {
    if($_SESSION['computerRolls'] <= 17) {
        while ($_SESSION['computerRolls'] <= 17) {
            $computerRoll = rand(1, 6);
            $_SESSION['computerRolls'] += $computerRoll;
        }
    }

    $playerRolls = rand (1, 6);
    $_SESSION['thisRollers'] += $playerRolls;

    echo "Player Rolls: " . $graphic[$playerRolls - 1];
    echo " Total Score: " . $_SESSION['thisRollers'];

    if ($_SESSION['thisRollers'] > 21) {
        if ($_SESSION['computerRolls'] <= 21) {
            echo " Du förlorade!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else {
            echo " Det blev lika, ni båda blev tjocka!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        }
    } else if ($_SESSION['thisRollers'] == 21) {
        if ($_SESSION['computerRolls'] == 21) {
            echo ' Attans, datorn fick också 21 så det blev lika.';
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        } else {
            echo '<script>alert("Grattis!!! Du fick 21!")</script>';
            echo "<br>" . " Du vann!";
            echo "<br>" . "Ditt resultat blev: " . $_SESSION['thisRollers'];
            echo ", " . "datorns resultat blev: " . $_SESSION['computerRolls'] . ". ";
            $_SESSION['thisRollers'] = 0;
            $_SESSION['computerRolls'] = 0;
        }
    }
}

?>
