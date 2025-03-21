<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="part2.php" method="post">
    <label>username:</label>
    <input type="text" name="username"><br>
    <label>password:</label>
    <input type="password" name="password"><br> 
    <input type="submit" value="log in">
 </form> 
</body>
</html>
<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    /*
========================================
  GET vs POST in PHP
========================================
PHP provides two primary methods for sending data from a form to a server: GET and POST.

----------------------------------------
  1. GET Method
----------------------------------------
- Sends data as URL parameters (appended to the URL).
- Example:
  <form action="process.php" method="get">
      <input type="text" name="username">
      <input type="submit" value="Submit">
  </form>
  If a user enters "john_doe", the URL becomes:
  process.php?username=john_doe

// ✅ Advantages of GET
- Can be bookmarked or shared as a URL.
- Works well for search queries (Google, YouTube, etc.).
- Faster since it caches the request.

// ❌ Disadvantages of GET
- Limited data size (about 2048 characters in most browsers).
- Not secure – data is visible in the URL.
- Should NOT be used for sensitive information (passwords, personal data).

----------------------------------------
  2. POST Method
----------------------------------------
- Sends data inside the request body, not visible in the URL.
- Example:
  <form action="process.php" method="post">
      <input type="text" name="username">
      <input type="password" name="password">
      <input type="submit" value="Submit">
  </form>

// ✅ Advantages of POST
- More secure than GET (data isn't stored in the URL).
- No length limitations – can send large amounts of data (file uploads, forms).
- Better for sensitive information like passwords.

// ❌ Disadvantages of POST
- Cannot be bookmarked or shared easily.
- Slightly slower because it does not cache.

----------------------------------------
  3. Accessing Data in PHP
----------------------------------------
// Using GET
if (isset($_GET["username"])) {
    echo "Username: " . $_GET["username"];
}

// Using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Username: " . $_POST["username"];
}

----------------------------------------
  4. When to Use GET vs POST?
----------------------------------------
| Feature            | GET  | POST |
|--------------------|------|------|
| Security          | ❌ Not secure | ✅ More secure |
| Data Length Limit | ✅ Yes (2048 chars) | ✅ No limit |
| Bookmarks / Sharing | ✅ Can be bookmarked | ❌ Cannot be bookmarked |
| Speed / Caching   | ✅ Faster (cached) | ❌ Slower (not cached) |
| Use for Forms?    | ❌ Not for sensitive data | ✅ Best for login, forms |

----------------------------------------
  5. Special Use Cases
----------------------------------------
// Use GET for:
- Search queries (e.g., Google, YouTube)
- Non-sensitive data
- API requests (e.g., fetching weather data)

// Use POST for:
- Login forms (username/password)
- Submitting comments or posts
- Uploading files (requires enctype="multipart/form-data")

----------------------------------------
  6. Combining GET and POST
----------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST Request: " . $_POST["username"];
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "GET Request: " . $_GET["username"];
}

----------------------------------------
  7. Security Tips
----------------------------------------
// Always validate and sanitize user input to prevent attacks like XSS (Cross-Site Scripting) and SQL Injection:
$username = htmlspecialchars($_POST["username"]); // Prevents XSS

// Use HTTPS for secure data transmission.

----------------------------------------
  Conclusion
----------------------------------------
- GET is useful for retrieving data but is NOT secure for sensitive information.
- POST is more secure and should be used for login forms, passwords, and large data submissions.
- Always validate and sanitize input to avoid security risks.
*/
?>
