<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/Category.php';

$database = new Database();
$db = $database->connect();

$cat = new Category($db);

$result = $cat->read();

$num = $result->rowCount();

if($num>0) {
    $cat_arr = array();
    $cat_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $cat_item = array(
            'id' => $id,
            'name' => $name,
            'created_at' => $created_at,
        );

        array_push($cat_arr['data'], $cat_item);
    }

    echo json_encode($cat_arr);
} else {
    echo json_encode(
        array('message' => 'No cats found')
    );
}
