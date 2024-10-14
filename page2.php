<?php
// Check if the cookie exists
if(isset($_COOKIE["myCookie"])) {
    // Retrieve and display the cookie value
    $cookieValue = $_COOKIE["myCookie"];
    echo "<h1>Cookie Retrieved</h1>";
    echo "<p>Value of 'myCookie': " . htmlspecialchars($cookieValue) . "</p>";
} else {
    echo "<h1>No Cookie Found</h1>";
    echo "<p>The cookie 'myCookie' does not exist. Please visit <a href='page1.php'>Page 1</a> to set it.</p>";
}
?>
