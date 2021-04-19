<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

?>

<h1><?= $header ?></h1>

<p><?= $message ?></p>

<!DOCTYPE html>
<html>

  <form action="" method="POST">
      <label>Number of Faces:</label><br />
      <input type="number" name="my_Faces" min="1" value="1">
    <input type="submit" name="submit" value="Roll" class="btn"></button>
  </form>

</html>

<?php

if (isset($_POST['submit'])) {
    $roller = rand (1, intval($_POST['my_Faces']));

    echo "Spartacus Rolls: " . $roller . "!";
}

?>
