<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part4.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type ="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $total =null;
    //$total = abs($x);
    //absolute vaue function

    //$total = round($x);    convenitonal rounding function
    //$total = floor($x);   always round down function
    //$total = ceil($x);    always round up function

    //$total = pow($x, $y); raise a bse to a given power

    //$total = sqrt($x); square root of a number

    //$total = max($x, $y, $z); return the highest value of the three numbers
    // $total = min($x, $y, $z); return the lowest value of the three numbers

    //$total = pi(); return the value of pi
    //$total = rand(); // return a random number between a min and max value

    //$total == $x + $y + $z; // add the three numbers together
    $total = rand(6,100);
    
    echo $total;
