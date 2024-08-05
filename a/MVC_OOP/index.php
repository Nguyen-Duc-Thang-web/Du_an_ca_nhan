<?php
require_once "./helpers/env.php";
require_once "./controllers/homeController.php";

require_once "./controllers/productController.php";
require_once "./models/database.php";
require_once "./models/product.php";

$home = new HomeController();
$product = new ProductController();
$act = $_GET['act'] ?? '/';
match ($act) {
    "/" => $home->home(),
    "product_list" => $product->Productlist(),

//  => ,
};


