<?php
require_once 'src/config.php';
require_once 'src/Validation.php';
require_once 'src/UserManagement.php';

session_start();

if ( isset( $_SESSION['loggedin'] ) && $_SESSION["loggedin"] === true ) {
    header('location: welcome.php');
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $valid = new Validation();

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $emailErr = $passwordErr = $generalErr = '';

    $valid->emptyV( $email, $emailErr );
    $valid->emptyV( $password, $passwordErr );

    $valid->emailV( $email, $emailErr );
    $valid->passwordV( $password, $passwordErr );

    if ( empty( $emailErr ) && empty( $passwordErr ) ) {
        $userMangement = new UserManagement(  DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );

        $userMangement->connect(  );
        $userMangement->login( $email, $password, $generalErr );
    }
    unset( $valid );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="post">
        <div class="">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <div class="">
                <?php echo ( $emailErr ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <div class="">
                <?php echo ( $passwordErr ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <input type="submit" value="Login">
        </div>
    </form>
    <div class="">Don't you have an account? <br>
        <a href="register.php">Register right now!</a>
    </div>
</body>
</html>