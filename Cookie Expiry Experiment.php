<?php
// Set a cookie that expires in 1 minute
setcookie("test_cookie", "Hello, World!", time() + 60);

// Check if the cookie is set and display its value
if (isset($_COOKIE['test_cookie'])) {
    echo "Cookie value: " . $_COOKIE['test_cookie'];
} else {
    echo "Cookie has expired or is not set.";
}
?>
