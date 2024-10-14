<?php
// Set the cookie name and value
$cookie_name = "secureCookie";
$cookie_value = "ThisIsASecureValue";

// Set the cookie parameters
// Parameters: name, value, expire, path, domain, secure, httponly
setcookie($cookie_name, $cookie_value, time() + 3600, "/", "", true, true); // 1 hour expiration

// Output a message indicating that the cookie has been set
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' is set!";
} else {
    echo "Cookie '$cookie_name' has been created, but it is not accessible until the page reloads.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Test</title>
</head>
<body>
    <h1>Secure Cookie Test</h1>
    <script>
        // Try to access the secure, HTTP-only cookie
        document.addEventListener("DOMContentLoaded", function() {
            const cookieValue = document.cookie; // Attempt to access the cookies
            console.log("Cookies accessible via JavaScript:", cookieValue);
            if (!cookieValue.includes("secureCookie")) {
                console.log("The secureCookie is not accessible via JavaScript (as expected).");
            } else {
                console.log("The secureCookie is accessible (not expected).");
            }
        });
    </script>
</body>
</html>
