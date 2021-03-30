<?php

require_once('MobileRestHandler.php');

$view = (isset($_GET['view'])) ?  $_GET['view'] : '';
switch($view) {

    case 'all':
        $mobile_rest_handler = new MobileRestHandler();
        $mobile_rest_handler->getAllMobiles();
        break;

    case 'single':
        $id = (isset($_GET['id'])) ? (int) $_GET['id'] : '';
        if (!empty($id) && is_int($id)) {
            $mobile_rest_handler = new MobileRestHandler();
            $mobile_rest_handler->getMobile($id);
            break;
        } else {
            break;
        }
        
    case '':
        break;
}

// czego tu nie rozumiem