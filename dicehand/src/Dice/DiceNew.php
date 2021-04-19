<?php

declare(strict_types=1);

namespace Korvin1337\Dice;

/**
 * Class Dice.
 */
class newDice
{
    $rolls = $_POST['rolls'] ?? 10;
    $dice = $_POST['dice'] ?? 3;
    $number = (int)$_POST['number'] ?? 10;
?>
    <form method="POST" action="./dice.php">
        <label for="rolls">Number of rolls</label>
        <input type="test" id="rolls" name="rolls" value="<?=$rolls?>"> <br /><br />
        <label for="rolls">Number of Dice</label>
        <input type="test" id="dice" name="dice" value="<?=$dice?>"> <br /><br />
        <label for="number">Your number (1-6)</label> <br />
        <input type="text" id="number" name="number" value="<?=$number?>"> <br /><br />
        <button type="submit">Roll the dice!</button>
    </form>
<?
    if($POST) {
        $total_hits = [];

        for($i=1; $i <= $rolls; $i++) {
            $hits = 0;
            for($x=1; x<=$dice; $x++) {
                if($number === mt_rand(1,6)) {
                    $hits++;
                }
            }
            $total_hits[$hits]++;
        }
        foreach($total_hits as $key=>$result) {
            echo "Your number appeared on a die $key times in $result rounds. <br />";
        };
    }
}
