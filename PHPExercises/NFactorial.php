<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="Find Factorial"/>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++){
        $factorial *= $i;
    }
    echo 'Factorial: ' . $factorial;
}
?>
</body>
</html>