<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Thêm Nhân Viên</h2>
        <div class="form-container">
            <form method="post" enctype="multipart/form-data">
                <?php if (isset($thongbao)): ?>
                    <div class="alert alert-danger">
                        <?php echo $thongbao; ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="Hoten" class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" id="Hoten" name="Hoten">
                </div>
                <div class="mb-3">
                    <label for="AnhDaiDien" class="form-label">Ảnh Đại Diện</label>
                    <input type="file" class="form-control" id="AnhDaiDien" name="AnhDaiDien">
                </div>
                <div class="mb-3">
                    <label for="GioiTinh" class="form-label">Giới Tính</label>
                    <select class="form-select" id="GioiTinh" name="GioiTinh">
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nữ</option>
                        <option value="Khac">Khác</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="SoDienThoai" class="form-label">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai">
                </div>
                <div class="mb-3">
                    <label for="DiaChi" class="form-label">Địa Chỉ</label>
                    <textarea class="form-control" id="DiaChi" name="DiaChi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="PhongBan" class="form-label">Phòng Ban</label>
                    <input type="text" class="form-control" id="PhongBan" name="PhongBan">
                </div>
                <a href="<?= BASE_DIR; ?>?act=list" class="btn btn-success">Quay
                    Lại</a>
                <button type="submit" name="btnend" class="btn btn-primary">Thêm Nhân Viên</button>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>