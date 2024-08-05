<?php
class NhanVien
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();

    }
    public function getAll()
    {
        $sql = "SELECT * FROM nhanvien  ORDER BY MaNV DESC ";
        return $this->db->getAll($sql);
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM nhanvien WHERE MaNV=$id ";
        return $this->db->getOne($sql);
    }
    public function insert($hoTen, $anhDaiDien, $gioiTinh, $soDienThoai, $diaChi, $phongBan)
    {
        $sql = "INSERT INTO `nhanvien`(`HoTen`, `AnhDaiDien`, `GioiTinh`, `SoDienThoai`, `DiaChi`, `PhongBan`) 
            VALUES ('$hoTen', '$anhDaiDien', '$gioiTinh', '$soDienThoai', '$diaChi', '$phongBan')";
        $this->db->exec($sql);
    }
    public function update($id, $hoTen, $anhDaiDien, $gioiTinh, $soDienThoai, $diaChi, $phongBan)
    {
        if (empty($anhDaiDien)) {
            $sql = "UPDATE `nhanvien` SET `Hoten`='$hoTen',`GioiTinh`='$gioiTinh',`SoDienThoai`='$soDienThoai',`DiaChi`='$diaChi',`PhongBan`='$phongBan' WHERE MaNV=$id";
        } else {
            $sql = "UPDATE `nhanvien` SET  `AnhDaiDien`='$anhDaiDien', `Hoten`='$hoTen',`GioiTinh`='$gioiTinh',`SoDienThoai`='$soDienThoai',`DiaChi`='$diaChi',`PhongBan`='$phongBan' WHERE MaNV=$id";
        }
        $this->db->exec($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `nhanvien` WHERE MaNV=$id";
        $this->db->exec($sql);
    }
}