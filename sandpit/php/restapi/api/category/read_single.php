<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Category.php';

$database = new Database();
$db = $database->connect();

$cat = new Category($db);

$cat->id = isset($_GET['id']) ? $_GET['id'] : die();

if($cat->read_single()) {
    $cat_arr = array(
        'id' => $cat->id,
        'name' => $cat->name,
        'created_at' => $cat->created_at,
    );

    print_r(json_encode($cat_arr));
} else {
    echo json_encode(
        array('message' => 'Single Read Of Catefory Did Not Work')
    );
}