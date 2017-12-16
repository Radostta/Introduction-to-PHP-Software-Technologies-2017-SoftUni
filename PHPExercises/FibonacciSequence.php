<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    <div>Generate Fibonacci sequence with number of elements:
        <input type="text" name="num" /></div>
    <br>
    <input type="submit" value="Generate sequence"/>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $currentFibonacci = 1;
    echo 'Fibonacci sequence: ' . $currentFibonacci . ' ';
    $nextFibonacci = 1;
    echo $nextFibonacci . ' ';

    for ($i = 2; $i < $n; $i++){
        $newCurrent = $currentFibonacci + $nextFibonacci;
        $nextFibonacci = $currentFibonacci;
        $currentFibonacci = $newCurrent;
        echo $currentFibonacci . ' ';
    }
}
?>
</body>
</html>