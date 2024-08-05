<?php
class DanhmucController
{
    public $danhmuc;
    public function __construct()
    {
        $this->danhmuc = new Danhmuc();
    }
    function list_dm()
    {
        $data = $this->danhmuc->getAll();

        require_once "./views/admin/danhmuc/list.php";
    }
    function add_dm()
    {
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $this->danhmuc->insert($name);
            header('Location: ?act=list_dm');
            exit();
        } else {
            header('Location: ?act=list_dm'); // Redirect back even if there's an error
            exit();
        }
    }

    function edit_dm()
    {
        if (isset($_POST['btnupdate'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $danhmucs = $this->danhmuc->getOne($id);
            $this->danhmuc->update($id, $name);
            header('Location: ?act=list_dm');
        } else {
            $id = $_GET['id'];
            $danhmucs = $this->danhmuc->getOne($id);
            require_once "./views/admin/danhmuc/edit.php";
        }
    }
    function delete_dm()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->danhmuc->delete($id);
            header('Location: ?act=list_dm');
        } else {
            header('Location: ?act=list_dm');
        }
    }
}