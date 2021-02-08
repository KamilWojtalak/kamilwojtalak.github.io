<?php

if( isset($_FILES) ) {
    print_r($_FILES);

    $file_err = $_FILES['file']['error'];

    if ( $file_err === 0 ) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmpname = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_type = explode( '/', $file_type);

        echo end($file_type);

        $err = array();
        $allowed_types = array( 'jpg', 'jpeg', 'png', 'gif' );

        $max_file_size = 8 * 1024 * 1024 * 16;

        if ($file_size > $max_file_size ) {
            array_push( $err, "Image is too large. Max avialiable file size is 16Mib." );
        }

        if ( !in_array( $file_type, $allowed_types ) ) {
            array_push( $err, "Not supported image extension" );
        }

        if ( empty($err) ) {
            print_r( $err );
        } else {
            move_uploaded_file( $file_tmpname ,__DIR__ . "\images\\" . $file_name,  );
            echo "<br> " . __DIR__;
            echo "<br> Success!";
        }
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
    <div class="">
        <input type="file" name="file" id="file">
    </div>
    <div class="">
        <input type="submit" value="submit">
    </div>
    </form>
    <output>
        <div class="">Name: <?php echo ($file_name) ??  ''; ?></div>
        <div class="">Size: <?php echo ($file_size) ??  ''; ?></div>
        <div class="">Mime type: <?php echo ($file_type) ? implode( '/', $file_type):  ''; ?></div>
    </output>
</body>
</html>