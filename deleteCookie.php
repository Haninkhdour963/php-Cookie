<?php
// Start the session
session_start();

// Set a cookie if it hasn't been set yet
if (!isset($_COOKIE['favorite_fruit'])) {
    setcookie('favorite_fruit', 'Apple', time() + 3600); // Cookie set for 1 hour
}

// Check if the delete button has been clicked
if (isset($_POST['delete_cookie'])) {
    // Delete the cookie by setting its expiration time to the past
    setcookie('favorite_fruit', '', time() - 3600);
    $message = "Cookie has been deleted.";
}

// Get the value of the cookie
$cookie_value = isset($_COOKIE['favorite_fruit']) ? $_COOKIE['favorite_fruit'] : 'Cookie not set.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management</title>
</head>
<body>

<h1>Cookie Management</h1>

<p>Your favorite fruit cookie: <strong><?php echo $cookie_value; ?></strong></p>

<form method="post">
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

<?php
// Display the message if the cookie was deleted
if (isset($message)) {
    echo "<p>$message</p>";
}
?>

</body>
</html>
