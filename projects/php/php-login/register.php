<?php
    
    // Initialize Database and Tables
    require_once 'src/config.php';
    require_once 'src/InitDB.php';
    require_once 'src/Validation.php';
    require_once 'src/UserManagement.php';

    $initDB = new InitDB( DB_HOST, '', DB_USERNAME, DB_PASSWORD );

    $initDB->connect();
    $initDB->createDatabase( DB_NAME );
    unset($initDB);
    $initDB = new InitDB( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );
    $initDB->connect();
    $initDB->createTable();
    unset($initDB);

    // Start dealing with form
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $email = trim( $_POST['email'] );
        $username = trim( $_POST['username'] );
        $password = trim( $_POST['password'] );
        $rpassword = trim( $_POST['rpassword'] );

        $emailErr = $usernameErr = $passwordErr = $rpasswordErr = $generalErr = '';

        $valid = new Validation();
        $valid->emptyV( $email, $emailErr );
        $valid->emptyV( $username, $usernameErr );
        $valid->emptyV( $password, $passwordErr );
        $valid->emptyV( $rpassword, $rpasswordErr );

        $valid->emailV( $email, $emailErr );
        $valid->usernameV( $username, $usernameErr );
        $valid->passwordV( $password, $passwordErr );
        $valid->rpasswordV( $rpassword, $password, $rpasswordErr );

        
        if( empty( $emailErr ) && empty( $usernameErr ) && empty( $passwordErr ) && empty( $rpasswordErr ) ) {

            $password = password_hash( $password, PASSWORD_DEFAULT );

            $userManagement = new UserManagement( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
            $userManagement->connect();

            if ( $userManagement->emailCanBeAdd( $email, $emailErr ) && $userManagement->usernameCanBeAdd( $username, $usernameErr ) ) {
                $userManagement->register( $email, $username, $password );
            } 
            unset( $userManagement );
        }
        unset( $valid );
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Register Form</title>
</head>
<body>
    <h1>PHP Register Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <div class="">
                <?php echo ( $emailErr ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <div class="">
                <?php echo ( $usernameErr ) ?? ''; ?>
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
            <label for="rpassword">Repat password:</label>
            <input type="password" name="rpassword" id="rpassword">
            <div class="">
                <?php echo ( $rpasswordErr ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <input type="submit" id="submit" value="Register">
        </div>
    </form>
    <div class="">
        <a href="login.php">Log in</a>
    </div>
</body>
</html>