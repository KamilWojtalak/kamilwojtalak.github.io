<?php
// connect to database
include 'config/database.php';
 
// include objects
include_once "objects/product.php";
include_once "objects/product-image.php";
include_once "objects/cart-item.php";
 
// connect to database here

// set page title
$page_title="Products";
 
// page header html
include 'header.php';
 
// contents will be here 
 
// layout footer code
include 'footer.php';
?>