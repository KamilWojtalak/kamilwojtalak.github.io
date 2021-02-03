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
    $email__err = $password__err = $general__err = '';

    $valid->empty_v( $email, $email__err );
    $valid->empty_v( $password, $password__err );

    $valid->email_v( $email, $email__err );
    $valid->password_v( $password, $password__err );

    if ( empty( $email__err ) && empty( $password__err ) ) {
        $user_mangement = new UserManagement(  DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );

        $user_mangement->connect(  );
        $user_mangement->login( $email, $password, $general__err );
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
                <?php echo ( $email_err ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <div class="">
                <?php echo ( $password_err ) ?? ''; ?>
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