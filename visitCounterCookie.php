<?php
$cookie_name = "user";
$cookie_value = "heno";
$cookie_email = "email";
$cookie_value1 = "heno@gmail.com";
$cookie_counter = "counter"; // Use a string for the cookie name

// Set cookies
setcookie($cookie_name, $cookie_value, time() + 30, "/");
setcookie($cookie_email, $cookie_value1, time() + 30, "/");

// Initialize counter
if (isset($_COOKIE[$cookie_counter])) {
    $counter = $_COOKIE[$cookie_counter] + 1; // Increment the existing counter
} else {
    $counter = 1; // Start with 1 if it doesn't exist
}

// Set/update the counter cookie
setcookie($cookie_counter, $counter, time() + 30, "/");

// User and email handling
if (isset($_COOKIE[$cookie_name])) {
    $user = $_COOKIE[$cookie_name];
} else {
    $user = "guest";
}

if (isset($_COOKIE[$cookie_email])) {
    $email = $_COOKIE[$cookie_email];
} else {
    $email = "no mail";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
</head>
<body>
<h3>User:</h3> <?= $user ?> <?= $email ?>
<h3>Counter:</h3> <?= $counter ?>
</body>
</html>
