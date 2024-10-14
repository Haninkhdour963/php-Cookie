<?php
// Start the session
session_start();

$cart = json_decode($_COOKIE['cart'], true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php if (!empty($cart)): ?>
            <?php foreach ($cart as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Your cart is empty.</li>
        <?php endif; ?>
    </ul>
    <a href="products.php">Continue Shopping</a>
</body>
</html>
