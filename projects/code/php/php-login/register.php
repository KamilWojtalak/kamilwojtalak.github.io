<?php
    
    // Initialize Database and Tables
    require_once 'src/config.php';
    require_once 'src/InitDB.php';
    require_once 'src/Validation.php';
    require_once 'src/UserManagement.php';

    $init_db = new InitDB( DB_HOST, '', DB_USERNAME, DB_PASSWORD );

    $init_db->connect();
    $init_db->create_database( DB_NAME );
    unset($init_db);
    $init_db = new InitDB( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );
    $init_db->connect();
    $init_db->create_table();
    unset($init_db);

    // Start dealing with form
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $email = trim( $_POST['email'] );
        $username = trim( $_POST['username'] );
        $password = trim( $_POST['password'] );
        $r_password = trim( $_POST['rpassword'] );

        $email_err = $username_err = $password_err = $r_password_err = $general_err = '';

        $valid = new Validation();
        $valid->empty_v( $email, $email_err );
        $valid->empty_v( $username, $username_err );
        $valid->empty_v( $password, $password_err );
        $valid->empty_v( $r_password, $r_password_err );

        $valid->email_v( $email, $email_err );
        $valid->username_v( $username, $username_err );
        $valid->password_v( $password, $password_err );
        $valid->r_password_v( $r_password, $password, $r_password_err );

        
        if( empty( $email_err ) && empty( $username_err ) && empty( $password_err ) && empty( $r_password_err ) ) {

            $password = password_hash( $password, PASSWORD_DEFAULT );

            $user_management = new UserManagement( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
            $user_management->connect();

            if ( $user_management->email_can_be_add( $email, $email_err ) && $user_management->username_can_be_add( $username, $username_err ) ) {
                $user_management->register( $email, $username, $password );
            } 
            unset( $user_management );
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
                <?php echo ( $email_err ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <div class="">
                <?php echo ( $username_err ) ?? ''; ?>
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
            <label for="rpassword">Repat password:</label>
            <input type="password" name="rpassword" id="rpassword">
            <div class="">
                <?php echo ( $r_password_err ) ?? ''; ?>
            </div>
        </div>
        <div class="">
            <input type="submit" id="submit" value="Register">
        </div>
    </form>
    <div class="">
        <a href="login.php">Login</a>
    </div>
</body>
</html>