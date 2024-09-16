<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uppg 1-3</title>
</head>

<body>

  <?php

  // 1.
  function calculateArea($length, $width)
  {
    if (!is_numeric($length) || !is_numeric($width)) {
      echo "Values must be numbers!";
    } else {
      echo "1. The area is: " . round($length * $width, 2);
    }
  }

  calculateArea(31.567, 3.42);


  echo "<br>";
  echo "<br>";


  // 2.
  $tal = "3, 24, 80, 9, 1";

  function calculateAverage($tal)
  {
    $talArray = explode(",", $tal);
    $talArray = array_map('trim', $talArray);
    $talArray = array_map('intval', $talArray);
    $sum = array_sum($talArray);
    $count = count($talArray);
    $average = number_format(($sum / $count), 2);
    echo "<p>2. The average is: $average</p>";
  }

  calculateAverage($tal);


  echo "<br>";
  echo "<br>";


  // 3.
  function add($num1, $num2)
  {
    $sum =  $num1 + $num2;
    return $sum;
  }

  echo "3. The sum is: " . add(15, 8);

  ?>

</body>

</html>
