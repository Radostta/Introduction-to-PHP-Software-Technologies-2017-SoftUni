<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="number" name="num1" />
    M: <input type="number" name="num2" />
    <input type="submit" value="Multiply" />
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])){
    echo $_GET['num1'] * $_GET['num2'];
}
?>
</body>
</html>