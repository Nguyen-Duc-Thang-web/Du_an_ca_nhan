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
    "/" => $home->trangChu(),
    "list" => $nhanvien->index(),
    "add" => $nhanvien->add(),
    "delete_nv" => $nhanvien->delete(),
    "edit_nv" => $nhanvien->edit(),
};


