<?php
    // Outputting text
    echo "Hello World <br>";
    echo "I'm Ajani<br>";
    
    // This is a single-line comment
    /* This is a multi-line comment
       explaining additional details */

    // Demonstrating PHP's boolean display behavior
    echo "<br>1 means true,<br> false is not displayed<br>";

    // String variables
    $name = "<br>Wonderfish is cool<br>";
    echo $name;
    $food = "pizza";
    $email = "Fake456@Email.com";

    // Integer variables
    $Users = 2;
    $age = 22;
    $quantity = 13;

    // Float variables
    $GPA = 1.5;
    $price = 5.99;

    // Boolean variables
    $Employed = true;
    $online = false;
    $For_Sale = true;

    // Null variable
    $total = null;

    // Outputting variables with strings
    echo "<br>Am I Employed: {$Employed}<br>";
    echo "Am I online: {$online}<br>";
    echo "<br>You have ordered {$quantity} x {$food}s<br>";
    echo "<br>Your GPA is {$GPA}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "<br>I am {$age} years old<br>";
    echo "There are {$Users} Users online";
    echo "<br>Hello {$name}<br>";
    echo "I like $food <br>";
    echo "<br>My email is {$email}";

    // Calculating the total cost
    $total = $quantity * $price;
    echo "<br>Your total is \${$total}<br><br>";

    // Basic math operations
    $x = 10; 
    $y = 3;
    $z = null;

    // Exponentiation (uncomment to use)
    // $z = $x ** $y; // 10 to the power of 3
    // echo $z; // Output: 1000

    // Modulus operation
    $z = $x % $y;
    echo $z; // Output: 1

    // Counter increment
    $counter = 0;
    $counter++;
    echo $counter."<br>"; // Output: 1

    // Arrays in PHP

    // Indexed array
    $fruit = array("apple", "banana", "cherry");
    echo $fruit[0]."<br>"; // Accessing element
    $fruit[] = "orange"."<br>"; // Adding new element

    // Associative array of people
    $person = array(
        array(
            "name" => "john",
            "age" => 25, 
            "job" => "developer"
        ),
        array(  
            "name" => "Jane", 
            "age" => 28,
            "job" => "designer"
        )
    );

    // Accessing elements in the associative array
    echo $person[0]["name"]."<br>"; // Output: john
    echo $person[1]["age"]."<br>";  // Output: 28

    // Count the number of elements in the $fruit array
echo count($fruit);

// Add "mango" and "pear" to the end of the $fruit array
array_push($fruit, "mango", "pear");

// Print the entire $fruit array
print_r($fruit);

// Create an indexed array of foods
$foods = array("pizza", "burger", "pasta");

// Create an associative array for user information
$user = array("username" => "Destiny", "email" => "Fake101@gmail.com");

// Create a multidimensional array for employees
$employees = array(
    array("name" => "Alice", "role" => "manager"),
    array("name" => "bob", "role" => "developer")
);

// Output the first food item
echo "I like " . $foods[0] . "<br>";

// Output the user's email
echo "useremail: " . $user["email"] . "<br>";

// Output the role of the first employee
echo "First employee's role:  " . $employees[0]["role"] . "<br>";



?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajani practice</title>
</head>

<body>
<title>Ajani's Site</title>
    <br>
    <button>Order a Pizza</button>
    <h1>Fang
    </h1>
    <h1>My name is Ajani</h1>
    <video></video>
    <br>
</body>
</html>
