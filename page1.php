<?php
// Set a cookie that lasts for 1 hour
setcookie("myCookie", "Hello from Page 1", time() + 3600, "/"); // The "/" means it's available throughout the domain

// Display a message confirming the cookie has been set
echo "<h1>Cookie Set</h1>";
echo "<p>Cookie 'myCookie' has been set with the value: 'Hello from Page 1'.</p>";
echo '<p><a href="page2.php">Go to Page 2</a></p>';
?>
