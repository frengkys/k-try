<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibbonaci</title>
</head>
<body>
<?php
function printFibonacci($n)
{

  $first = 0;
  $second = 1;

  echo "Fibonacci Series \n";

  echo $first.' '.$second.' ';

  for($i = 2; $i < $n; $i++){

    $third = $first + $second;

    echo $third.' ';

    $first = $second;
    $second = $third;

  }
}

if (isset($_POST['number'])) {
    $result = printFibonacci($_POST['number']);
}
?>

<form method="post">
    <input type="text" name="number" />
    <input type="submit" value="submit" />
</form>

</body>
</html>
