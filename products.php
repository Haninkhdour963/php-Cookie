<?php
// Start the session
session_start();

// Check if the cookie exists, if not, create an empty array
if (!isset($_COOKIE['cart'])) {
    setcookie('cart', json_encode([]), time() + (86400 * 30), "/"); // 30 days
}

$products = [
    "Product 1" => 10.00,
    "Product 2" => 15.00,
    "Product 3" => 20.00,
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
    $cart = json_decode($_COOKIE['cart'], true);
    $product = $_POST['product'];

    // Add the product to the cart
    $cart[] = $product;

    // Update the cookie
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/");
    header("Location: products.php"); // Redirect to avoid form resubmission
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $name => $price): ?>
            <li>
                <?php echo $name . " - $" . number_format($price, 2); ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="product" value="<?php echo $name; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
</body>
</html>
