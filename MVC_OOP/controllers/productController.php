<?php
class ProductController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function Productlist()
    {
        $data = $this->product->getAll();
        require_once "./views/products/list.php";
    }
    public function add()
    {
        if (isset($_POST['btnend'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $file = $_FILES['image'];
            $this->product->insert($name, $price, $file['name']);
            $img_path = "./uploads/" . $file['name'];
            if ($file['error'] == 0) {
                move_uploaded_file($file['tmp_name'], $img_path);
            }
            $thongbao = "them thanh cong";
        }
        require_once "./views/products/add.php";
    }
    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->product->getOne($id);
            if (empty($data)) {
                header('Location: ?act=product_list');
            }
        } else {
            header('Location: ?act=product_list');
        }

        if (isset($_POST['btnend'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $file = $_FILES['image'];
            $this->product->update($id, $name, $price, $file['name']);
            $img_path = "./uploads/" . $file['name'];
            if ($file['error'] == 0) {
                move_uploaded_file($file['tmp_name'], $img_path);
            }
            $thongbao = "sửa thanh cong";
            header('Location: ?act=product_list');
        }
        require_once "./views/products/edit.php";

    }
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->product->delete($id);
            header('Location: ?act=product_list');
        } else {
            header('Location: ?act=product_list');
        }
    }
}
