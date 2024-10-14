<?php
// Set an initial cookie if it doesn't exist
if (!isset($_COOKIE['user_level'])) {
    setcookie('user_level', 'Beginner', time() + (86400 * 30), "/"); // 86400 = 1 day
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_level'])) {
    // Update the cookie value with the user's input
    $new_user_level = htmlspecialchars($_POST['user_level']);
    setcookie('user_level', $new_user_level, time() + (86400 * 30), "/"); // 86400 = 1 day
    // Refresh the page to display the updated cookie value
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Get the current value of the cookie
$current_user_level = isset($_COOKIE['user_level']) ? $_COOKIE['user_level'] : 'Not Set';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Update Example</title>
</head>
<body>
    <h1>Update Your User Level</h1>
    <form method="POST" action="">
        <label for="user_level">Current User Level: <?php echo $current_user_level; ?></label><br>
        <input type="text" id="user_level" name="user_level" placeholder="Enter new User Level" required>
        <button type="submit">Update User Level</button>
    </form>

    <?php if (isset($_COOKIE['user_level'])): ?>
        <p>Your updated User Level: <?php echo $_COOKIE['user_level']; ?></p>
    <?php endif; ?>
</body>
</html>
