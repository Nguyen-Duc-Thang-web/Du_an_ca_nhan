<?php
class NhanVienController
{
    public $nhanvien;
    public function __construct()
    {
        $this->nhanvien = new NhanVien();
    }
    public function index()
    {
        $data = $this->nhanvien->getAll();
        require_once "./views/nhanviens/list.php";
    }
    public function add()
    {
        if (isset($_POST['btnend'])) {
            $hoTen = $_POST['Hoten'];
            $anhDaiDien = $_FILES['AnhDaiDien'];
            $gioiTinh = $_POST['GioiTinh'];
            $soDienThoai = $_POST['SoDienThoai'];
            $diaChi = $_POST['DiaChi'];
            $phongBan = $_POST['PhongBan'];
            $errors = [];
            if (empty($hoTen)) {
                $errors[] = "Họ tên không được để trống.";
            }
            if ($anhDaiDien['error'] == UPLOAD_ERR_NO_FILE) {
                $errors[] = "Vui lòng chọn ảnh đại diện.";
            }
            if ($anhDaiDien['size'] > 2000000) {
                $errors[] = "Dung lượng file upload phải dưới 200KB.";
            }
            if (empty($soDienThoai)) {
                $errors[] = "Số điện thoại không được để trống.";
            }
            if (empty($gioiTinh)) {
                $errors[] = "Giới tính không được để trống.";
            }

            if (empty($diaChi)) {
                $errors[] = "Địa chỉ không được để trống.";
            }

            if (empty($phongBan)) {
                $errors[] = "Phòng ban không được để trống.";
            }

            if (empty($errors)) {
                $this->nhanvien->insert($hoTen, $anhDaiDien['name'], $gioiTinh, $soDienThoai, $diaChi, $phongBan);
                $img_path = "./uploads/" . $anhDaiDien['name'];
                if ($anhDaiDien['error'] == 0) {
                    move_uploaded_file($anhDaiDien['tmp_name'], $img_path);
                }
                $thongbao = "Thêm nhân viên thành công";
            } else {
                $thongbao = implode("<br>", $errors);

            }
        }

        require_once "./views/nhanviens/add.php";
    }
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->nhanvien->delete($id);
            header('Location: ?act=list');
        } else {
            header('Location: ?act=list');
        }
    }
    // public function edit()
    // {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $data = $this->nhanvien->getOne($id);
    //         if (empty($data)) {
    //             header('Location: ?act=list');
    //         }
    //     } else {
    //         header('Location: ?act=list');
    //     }
    //     if (isset($_POST['btnend'])) {
    //         $hoTen = $_POST['Hoten'];
    //         $anhDaiDien = $_FILES['AnhDaiDien'];
    //         $gioiTinh = $_POST['GioiTinh'];
    //         $soDienThoai = $_POST['SoDienThoai'];
    //         $diaChi = $_POST['DiaChi'];
    //         $phongBan = $_POST['PhongBan'];
    //         $errors = [];
    //         if (empty($hoTen)) {
    //             $errors[] = "Họ tên không được để trống.";
    //         }
    //         $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    //         $fileExtension = strtolower(pathinfo($anhDaiDien['name'], PATHINFO_EXTENSION));
    //         if (!in_array($fileExtension, $allowedExtensions)) {
    //             $errors[] = "Chỉ cho phép các định dạng ảnh jpg, jpeg, png, gif.";
    //         }
    //         if ($anhDaiDien['size'] > 2000000) {
    //             $errors[] = "Dung lượng file upload phải dưới 200KB.";
    //         }
    //         if (empty($soDienThoai)) {
    //             $errors[] = "Số điện thoại không được để trống.";
    //         }
    //         if (empty($gioiTinh)) {
    //             $errors[] = "Giới tính không được để trống.";
    //         }

    //         if (empty($diaChi)) {
    //             $errors[] = "Địa chỉ không được để trống.";
    //         }

    //         if (empty($phongBan)) {
    //             $errors[] = "Phòng ban không được để trống.";
    //         }
    //         if (empty($errors)) {
    //             $anhDaiDienName = $data['AnhDaiDien']; // Sử dụng ảnh cũ mặc định
    //             if (!empty($anhDaiDien['name']) && $anhDaiDien['error'] == 0) {
    //                 $anhDaiDienName = $anhDaiDien['name'];
    //                 $img_path = "./uploads/" . $anhDaiDienName;
    //                 move_uploaded_file($anhDaiDien['tmp_name'], $img_path);
    //             }

    //             $this->nhanvien->update($id, $hoTen, $anhDaiDienName, $gioiTinh, $soDienThoai, $diaChi, $phongBan);
    //             header('Location: ?act=list');
    //         } else {
    //             $thongbao = implode("<br>", $errors);
    //         }
    //     }
    //     require_once "./views/nhanviens/edit.php";
    // }
    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->nhanvien->getOne($id);
            if (empty($data)) {
                header('Location: ?act=list');
            }
        } else {
            header('Location: ?act=list');
        }

        if (isset($_POST['btnend'])) {
            $hoTen = $_POST['Hoten'];
            $anhDaiDien = $_FILES['AnhDaiDien'];
            $gioiTinh = $_POST['GioiTinh'];
            $soDienThoai = $_POST['SoDienThoai'];
            $diaChi = $_POST['DiaChi'];
            $phongBan = $_POST['PhongBan'];
            $errors = [];

            if (empty($hoTen)) {
                $errors[] = "Họ tên không được để trống.";
            }

            if (!empty($anhDaiDien['name'])) {
                if ($anhDaiDien['size'] > 200000) {
                    $errors[] = "Dung lượng file upload phải dưới 200KB.";
                }
                $allowedExtensions = ['jpg', 'jpeg', 'pdf', 'png', 'gif'];
                $fileExtension = strtolower(pathinfo($anhDaiDien['name'], PATHINFO_EXTENSION));
                if (!in_array($fileExtension, $allowedExtensions)) {
                    $errors[] = "Chỉ cho phép các định dạng ảnh jpg, jpeg, png, gif.";
                }
            }

            if (empty($soDienThoai)) {
                $errors[] = "Số điện thoại không được để trống.";
            }
            if (empty($gioiTinh)) {
                $errors[] = "Giới tính không được để trống.";
            }

            if (empty($diaChi)) {
                $errors[] = "Địa chỉ không được để trống.";
            }

            if (empty($phongBan)) {
                $errors[] = "Phòng ban không được để trống.";
            }

            if (empty($errors)) {
                $anhDaiDienName = $data['AnhDaiDien'];
                if (!empty($anhDaiDien['name']) && $anhDaiDien['error'] == 0) {
                    $anhDaiDienName = $anhDaiDien['name'];
                    $img_path = "./uploads/" . $anhDaiDienName;
                    move_uploaded_file($anhDaiDien['tmp_name'], $img_path);
                }

                $this->nhanvien->update($id, $hoTen, $anhDaiDienName, $gioiTinh, $soDienThoai, $diaChi, $phongBan);
                header('Location: ?act=list');
            } else {
                $thongbao = implode("<br>", $errors);
            }
        }
        require_once "./views/nhanviens/edit.php";
    }


}
