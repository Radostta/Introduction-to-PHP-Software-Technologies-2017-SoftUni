<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php //Sieve of Erastosthenes Algorithm
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);

    $primes = [];
    for ($i = 2; $i <= $num; $i++){
        $primes[$i] = true;
    }

    for ($number = 2; $number < $num; $number++){
        if ($primes[$number] == true){
            for ($nonPrime = 2 * $number; $nonPrime <= $num; $nonPrime += $number){
                $primes[$nonPrime] = false;
            }
        }
    }

    for ($number = $num; $number >= 2; $number--){
        if ($primes[$number] == true){
            echo "$number ";
        }

    }
}
?>
</body>
</html>