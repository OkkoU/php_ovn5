<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];

  switch ($operation) {
    case "add":
      $result = $num1 + $num2;
      break;

    case "subtract":
      $result = $num1 - $num2;
      break;

    case "multiply":
      $result = $num1 * $num2;
      break;

    case "divide":
      if ($num2 != 0) {
        $result = $num1 / $num2;
      } else {
        $result = "Error: Går inte att dividera med noll!";
      }
      break;

    default:
      $result = "Ogiltig operation vald!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
  <title>Uppg 4</title>
</head>

<body>

  <h1>Kalkylator</h1>

  <form action="" method="POST">

    <input type="number" id="num1" name="num1" step="any" placeholder="Nummer 1" required>

    <br>

    <input type="number" id="num2" name="num2" step="any" placeholder="Nummer 2" required>

    <br>

    <div id="operation-field">
      <label id="operation-text" for="operation">Operation:</label>
      <br>
      <select id="operation" name="operation" required>
        <option value="add">Addition</option>
        <option value="subtract">Subtraktion</option>
        <option value="multiply">Multiplikation</option>
        <option value="divide">Division</option>
      </select>
    </div>

    <br>

    <input id="submit" type="submit" name="submit" value="Räkna">

  </form>

  <?php
  echo "<p>Resultat: $result</p>";
  ?>

</body>

</html>
