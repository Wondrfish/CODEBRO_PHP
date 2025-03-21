<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="part3.php" method="post">
    <label>Quantity:</label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
   </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    
    $total = $price * $quantity;

    echo"you ordered {$quantity} x {$item}s <br>";
    echo "your total is \${$total}";
?>
