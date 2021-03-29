<?php

session_start();

if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
    header('location: login.php');

}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome <?php echo htmlspecialchars($username) ?? '';?></h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, inventore quidem ipsa nihil et laboriosam a deleniti alias? Nam, non!</p>
    <div class="">What do you want?</div>
    <div class=""><a href="reset-password.php">Reset your password?</a></div>
    <div class=""><a href="logout.php">Log out of Your Account</a></div>
</body>
</html>