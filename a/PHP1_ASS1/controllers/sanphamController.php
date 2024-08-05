<?php
require_once './models/danhmuc.php';
class SanphamController
{
    public $sanpham;
    public $danhmuc;
    public function __construct()
    {
        $this->sanpham = new SanPham();
        $this->danhmuc = new Danhmuc();
    }
    function list_sp()
    {
        $danhmuc = $this->danhmuc->getAll();
        $data = $this->sanpham->getAll();
        require_once "./views/admin/sanpham/list.php";
    }
    function create_sp()
    {
        if (isset($_POST['btnend'])) {
            $name = $_POST['name'];
            $danhmuc_id = $_POST['danhmuc_id'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $file = $_FILES['image'];

            $this->sanpham->insert($name, $danhmuc_id, $price, $quantity, $file['name']);
            $img_path = "./uploads/" . $file['name'];
            if ($file['error'] == 0) {
                move_uploaded_file($file['tmp_name'], $img_path);
            }
            $thongbao = "them thanh cong";
            header('Location: ?act=list_sp');
        } else {
            $danhmucs = $this->danhmuc->getAll();
            require_once "./views/admin/sanpham/list.php";
        }
    }
    function edit_sp()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->sanpham->getOne($id);
            if (empty($data)) {
                header('Location: ?act=list_sp');
            }
        } else {
            header('Location: ?act=list_sp');
        }
        if (isset($_POST['btnupdate'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $danhmuc_id = $_POST['danhmuc_id'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $old_image = $_POST['old_image'];
            $file = $_FILES['image'];

            $image = $old_image;
            if ($file['error'] == 0) {
                $image = $file['name'];
                $img_path = "./uploads/" . $file['name'];
                move_uploaded_file($file['tmp_name'], $img_path);
            }

            $this->sanpham->update($id, $name, $danhmuc_id, $price, $quantity, $image);
            header('Location: ?act=list_sp');
        } else {
            $id = $_GET['id'];
            $product = $this->sanpham->getOne($id);
            $danhmucs = $this->danhmuc->getAll();
            require_once "./views/admin/sanpham/edit.php";
        }

    }

    function delete_sp()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->sanpham->delete($id);
            header('Location: ?act=list_sp');
        } else {
            header('Location: ?act=list_sp');
        }
    }
}
