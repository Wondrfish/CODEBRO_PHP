<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Part5.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="caculeate">


    </form>
</body>
</html>
<?php
    $cricumfrince = null;

    $radius = $_POST["radius"];
    $cricumfrince = 2 * pi() * $radius;
    $cricumfrince = round($cricumfrince,2);

    $area = pi () * pow($radius,2);
    $area = round($area,2);

    $volume = 4/3 * pi() * pow($radius,3);
    echo"circumrnce = {$cricumfrince} cm <br>";
    echo"area = {$area} cm^2 <br>";
    echo"volume = {$volume} <br>";
?>
