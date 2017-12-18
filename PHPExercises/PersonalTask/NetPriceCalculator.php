<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NetPriceCalculator</title>

</head>
<body>
<form>
    <div>Gross Price: </div><input type="text" name="grossPrice" /> <br><br>
    <div>Commission Percent: </div><input type="text" name="commissionPercent" /> <br><br>
    <input type="submit" value="Calculate" /> <br><br>
</form>
<?php
if (isset($_GET['grossPrice']) && isset($_GET['commissionPercent'])){
    $grossPrice = doubleval($_GET['grossPrice']);
    $commissionPercent = doubleval($_GET['commissionPercent']);
    $netPrice = $grossPrice *(1 - ($commissionPercent / 100));
    echo "<div>Net Price: $netPrice</div>";
}
?>
</body>
</html>