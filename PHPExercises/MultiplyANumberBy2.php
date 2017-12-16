<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="Multiply by 2" />
</form>

<?php
if (isset($_GET['num'])){
    $n = intval($_GET['num']);
    ?> <br>
    <?php echo 'RESULT: ' . $n * 2;
}
?>
</body>
</html>