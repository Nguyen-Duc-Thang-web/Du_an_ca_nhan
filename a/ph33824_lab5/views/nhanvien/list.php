<!DOCTYPE html>
<html>

<head>
    <title>Danh Sách Nhân Viên</title>
</head>

<body>
    <h1>Danh Sách Nhân Viên</h1>
    <table border="1">
        <tr>
            <th>MaNV</th>
            <th>Hoten</th>
            <th>AnhDaiDien</th>
            <th>GioiTinh</th>
            <th>SoDienThoai</th>
            <th>DiaChi</th>
            <th>PhongBan</th>
        </tr>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $row['MaNV']; ?></td>
                <td><?php echo $row['Hoten']; ?></td>
                <td><img src="<?php echo $row['AnhDaiDien']; ?>" alt="Anh Dai Dien" width="100"></td>
                <td><?php echo $row['GioiTinh']; ?></td>
                <td><?php echo $row['SoDienThoai']; ?></td>
                <td><?php echo $row['DiaChi']; ?></td>
                <td><?php echo $row['PhongBan']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>