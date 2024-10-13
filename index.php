<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preference: Background Color</title>
</head>
<body style="background-color: <?php echo isset($_COOKIE['bgcolor']) ? htmlspecialchars($_COOKIE['bgcolor']) : 'white'; ?>;">

    <h1>Select Your Preferred Background Color</h1>
    
    <form method="POST" action="">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="white">White</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>
        <button type="submit">Set Background Color</button>
    </form>

    <?php
    // Step 2: Handle Form Submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
        $color = $_POST['color'];
        // Step 3: Save Selected Color in a Cookie
        setcookie('bgcolor', $color, time() + (86400 * 30), "/"); // Cookie expires in 30 days
        // Refresh the page to apply the new color
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    ?>

</body>
</html>
