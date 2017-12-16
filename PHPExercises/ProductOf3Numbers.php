<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />
    <input type="submit" value="Find if product is positive or negative" />
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $n1 = doubleval($_GET['num1']);
    $n2 = doubleval($_GET['num2']);
    $n3 = doubleval($_GET['num3']);
    $negativeNumbersCount = 0;

    if ($n1 < 0) {
        $negativeNumbersCount++;
    }
    if ($n2 < 0){
        $negativeNumbersCount++;
    }
    if ($n3 < 0){
        $negativeNumbersCount++;
    }

    if ($negativeNumbersCount % 2 == 0 || $n1 ==0 || $n2 ==0 || $n3 ==0){
        echo 'Positive';
    }
    else{
        echo 'Negative';
    }
}
?>
</body>
</html>