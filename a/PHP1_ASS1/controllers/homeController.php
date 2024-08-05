<?php
class HomeController
{
    public $home;
    public function __construct()
    {
        $this->home = new Home();
    }
    function home_client()
    {
        $data = $this->home->getAll();
        require_once "./views/client/home_client.php";
    }
    function sanpham()
    {
        $data = $this->home->getAll();
        require_once "./views/client/content/sanpham.php";
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->home->login($username, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                if ($user['type'] == 0) {
                    header('Location: ?act=list_dm');
                } else {
                    header('Location: ?act=/');
                    // $data = $this->home->getAll();
                    // require_once "./views/client/home_client.php";
                }
            } else {
                echo "Invalid username or password";
            }
        } else {
            require_once "./views/login.php";
        }
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->home->getUserByUsername($username)) {
                echo "Tên đăng nhập đã tồn tại";
                return;
            }
            $result = $this->home->register($username, $password);
            if ($result) {
                $user = $this->home->login($username, $password);
                if ($user) {
                    session_start();
                    $_SESSION['user'] = $user;
                    echo "Đăng ký và đăng nhập thành công";
                    header('Location: ?act=/');
                    exit;
                } else {
                    echo "Đăng ký thành công nhưng đăng nhập tự động thất bại";
                }
            } else {
                echo "Đăng ký thất bại: " . $result;
            }
        } else {
            require_once "./views/client/home_client.php";
        }
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: ?act=/');
        exit;
    }

}