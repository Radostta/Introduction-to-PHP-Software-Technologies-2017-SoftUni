<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
<ul>
    <?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $n1 = intval($_GET['num1']);
    $n2 = intval($_GET['num2']);
    for ($j = 1; $j <= $n1; $j++){ ?>
    <li><?php echo 'List ' . $j ?>
        <ul>
            <?php
            for ($i = 1; $i <= $n2; $i++){ ?>
            <li><?php Echo '    Element ' . $j . '.' . $i?></li>
            <?php } ?>
        </ul>
    </li>
<?php }
} ?>
</ul>
</body>
</html>