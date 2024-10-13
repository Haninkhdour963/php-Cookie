
<?php
session_start();

$username=isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login remember Username with Cookie</title>
</head>
<body>
    <form action="" method="post">
    <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <input type="submit" value="Login">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=trim($_POST['username']);
        //setcookie
        setcookie('username', $username, time()+ (86400 * 30), "/"); 
        //redirect to the same page
        header('location:'.$_SERVER['PHP_SELF']);
        exit();
    }

    ?>
</body>
</html>