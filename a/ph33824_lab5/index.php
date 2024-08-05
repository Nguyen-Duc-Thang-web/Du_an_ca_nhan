<?php
require_once "./helpers/env.php";
require_once "./controllers/homeController.php";

require_once "./controllers/nhanVienController.php";
require_once "./models/database.php";
require_once "./models/nhanVien.php";

$home = new HomeController();
$nhanvien = new NhanVienController();
$act = $_GET['act'] ?? '/';
match ($act) {
    "/" => $home->home(),
    "list" => $nhanvien->index(),

//  => ,
};


