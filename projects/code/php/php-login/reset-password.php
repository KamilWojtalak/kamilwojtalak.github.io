<?php

require_once 'src/config.php';
require_once 'src/Validation.php';
require_once 'src/UserManagement.php';

session_start();

if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
    header('location: login.php');

}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id = htmlspecialchars( $_SESSION['id'] );

    $o_password = trim($_POST['opassword']);
    $n_password = trim($_POST['npassword']);
    $r_password = trim($_POST['rpassword']);

    $o_password_err = $n_password_err = $r_password_err = $info = '';

    $valid = new Validation();

    $valid->empty_v( $o_password, $o_password_err );
    $valid->empty_v( $n_password, $n_password_err );
    $valid->empty_v( $r_password, $r_password_err );

    $valid->password_v( $o_password, $o_password_err );
    $valid->password_v( $n_password, $n_password_err );
    $valid->r_password_v( $r_password, $n_password, $r_password_err);

    if ( empty($o_password_err) && empty($n_password_err) && empty($r_password_err) ) {
        $user_management = new UserManagement( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );
        $user_management->connect();

        $user_management->check_if_correct_password( $id, $o_password, $o_password_err );

        if ( empty($o_password_err) ) {
            $n_password = password_hash( $n_password, PASSWORD_DEFAULT );
            $user_management->update_password( $id, $n_password, $info);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
</head>
<body>
    <h1>Reset your password</h1>
    <div class="">
        <?php echo ($info) ?? '';?>
    </div>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="">
            <label for="opassword">Old password</label><br>
            <input type="password" name="opassword" id="opassword">
            <div class="">
                <?php echo ($o_password_err) ?? '';?>
            </div>
        </div>
        <div class="">
            <label for="npassword">New password</label><br>
            <input type="password" name="npassword" id="npassword">
            <div class="">
                <?php echo ($n_password_err) ?? '';?>

            </div>
            <label for="rpassword">Repeat new password</label><br>
            <input type="password" name="rpassword" id="rpassword">
            <div class="">
                <?php echo ($r_password_err) ?? '';?>

            </div>
            <div class="">
                <input type="submit" value="Reset password">
            </div>
        </div>
    </form>
</body>
</html>