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

    $opassword = trim($_POST['opassword']);
    $npassword = trim($_POST['npassword']);
    $rpassword = trim($_POST['rpassword']);

    $opasswordErr = $npasswordErr = $rpasswordErr = $info = '';

    $valid = new Validation();

    $valid->emptyV( $opassword, $opasswordErr );
    $valid->emptyV( $npassword, $npasswordErr );
    $valid->emptyV( $rpassword, $rpasswordErr );

    $valid->passwordV( $opassword, $opasswordErr );
    $valid->passwordV( $npassword, $npasswordErr );
    $valid->rpasswordV( $rpassword, $npassword, $rpasswordErr);

    if ( empty($opasswordErr) && empty($npasswordErr) && empty($rpasswordErr) ) {
        $userManagement = new UserManagement( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );
        $userManagement->connect();

        $userManagement->checkIfCorrectPassword( $id, $opassword, $opasswordErr );

        if ( empty($opasswordErr) ) {
            $npassword = password_hash( $npassword, PASSWORD_DEFAULT );
            $userManagement->updatePassword( $id, $npassword, $info);
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
                <?php echo ($opasswordErr) ?? '';?>
            </div>
        </div>
        <div class="">
            <label for="npassword">New password</label><br>
            <input type="password" name="npassword" id="npassword">
            <div class="">
                <?php echo ($npasswordErr) ?? '';?>

            </div>
            <label for="rpassword">Repeat new password</label><br>
            <input type="password" name="rpassword" id="rpassword">
            <div class="">
                <?php echo ($rpasswordErr) ?? '';?>

            </div>
            <div class="">
                <input type="submit" value="Reset password">
            </div>
        </div>
    </form>
</body>
</html>