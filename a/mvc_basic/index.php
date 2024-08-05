<?php
require_once "./helpers/env.php";
require_once "./controllers/homeController.php";
require_once "./helpers/connectdb.php";

require_once "./controllers/productController.php";
require_once "./models/product.php";
$act = $_GET['act'] ?? '/';
match ($act) {
    "/" => home(),
    "product_list" => Productlist(),

//  => ,
};
require_once "./helpers/disconnectdb.php";

