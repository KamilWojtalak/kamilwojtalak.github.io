<?php

$formEmpty = [
    'name' => 'Name must not be empty',
    'email' => 'Email must not be empty',
    'tel' => 'tel must not be empty',
];
$formValid = [
    'name' => 'Name is not valid!',
    'email' => 'Email is not valid!',
    'tel' => 'tel is not valid!',
];

function testInput( $input ) {
    return trim(stripslashes(htmlspecialchars($input)));
}

if ( isset($_POST['submit']) ) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $nameErr = $emailErr = $telErr = '';

    if ( empty($name) ) {
        $nameErr = $formEmpty['name'];
    } else if ( !preg_match( '/\w/', $name )) {
        $nameErr = $formValid['name'];
    } else {
        $name = testInput($name);
    }

    if ( empty($email) ) {
        $emailErr = $formEmpty['email'];
    } else if ( filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = $formValid['email'];
    } else {
        $email = testInput($email);
        
    }

    if ( empty($tel) ) {
        $telErr = $formEmpty['tel'];
    } else if ( !preg_match( '/\d{3}-\d{3}-\d{3}/', $tel )) {
        $telErr = $formValid['tel'];
    } else {
        $tel = testInput($tel);
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

    <div class="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <p><?php echo ($nameErr) ?? ''; ?></p>
    </div>
    <div class="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <p><?php echo ($emailErr) ?? ''; ?></p>
    </div>
    <div class="">
        <label for="tel">Tel:</label>
        <input type="text" name="tel" id="tel" placeholder="xxx-xxx-xxx">
        <p><?php echo ($telErr) ?? ''; ?></p>
    </div>
    <div class="">
        <input type="submit" name="submit" value="Send">
    </div>
    </form>

    <div class="">
        <?php 
            echo "Name: $name. <br>";
            echo "Email: $email. <br>";
            echo "Tel: $tel. <br>";
        ?>
    </div>
</body>
</html>