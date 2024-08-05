<?php
session_start();
require_once "./helpers/env.php";
require_once "./controllers/homeController.php";
require_once "./controllers/sanphamController.php";
require_once "./controllers/danhmucController.php";
require_once "./models/database.php";
require_once "./models/sanpham.php";
require_once "./models/home.php";

$act = $_GET['act'] ?? '/';
$sanpham = new sanphamcontroller();
$danhmuc = new danhmuccontroller();
$home = new homecontroller();

match ($act) {
    // client
    "/" => $home->home_client(),
    "sanpham" => $home->sanpham(),
    // admin
    // "home_admin" => $home->home_admin(),

    // đăng nhập
    "login" => $home->login(),
    "register" => $home->register(),
    "logout" => $home->logout(),

    "list_sp" => $sanpham->list_sp(),
    "edit_sp" => $sanpham->edit_sp(),
    "create_sp" => $sanpham->create_sp(),
    "delete_sp" => $sanpham->delete_sp(),

    "list_dm" => $danhmuc->list_dm(),
    "add_dm" => $danhmuc->add_dm(),
    "edit_dm" => $danhmuc->edit_dm(),
    "delete_dm" => $danhmuc->delete_dm(),
    default => http_response_code(404),
};
