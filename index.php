<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document Title</title>
  </head>
  <body>
    <?php
    // the two variables responsible for doing the operations
      $var1 = 6;
    $var2 = 7;
    //the operations
    $sum = $var1 + $var2;
    $sustract = $var1 - $var2;
    $multiply = $var1 * $var2;
    $divide = $var1 / $var2;
    $mod = $var1 % $var2;
    $expo = $var1 ** $var2;
    // the echo for writing the corresponding operations
    echo "$var1 + $var2 = $sum<br>";
    echo "$var1 - $var2 = $sustract<br>";
    echo "$var1 * $var2 = $multiply<br>";
    echo "$var1 / $var2 = $divide<br>";
    echo "$var1 % $var2 = $mod<br>";
    echo "$var1 to the power of $var2 = $expo<br>";
    $varstring = "HELLO";
    $sumstring = $varstring + $var2;
    // proof of string
    echo "With string it would be: $varstring + $var2 = $sumstring";
    ?>
  </body>
</html>
