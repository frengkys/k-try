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
function isPrime($num) {
    if($num == 1)
        return false;

    if($num == 2)
        return true;

    if($num % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}

if (isset($_POST['number'])) {
    $result = isPrime($_POST['number']);
}
?>
    
<?php if (isset($result)) { ?>
    <h1> Result: <?php echo $result ? 'prime' : 'not prime' ?></h1>
<?php } ?>

<form method="post">
    <input type="text" name="number" />
    <input type="submit" value="submit" />
</form>

</body>
</html>
