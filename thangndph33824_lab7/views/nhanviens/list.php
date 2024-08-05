<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang danh sách nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" container">
    <h2 class="text-center text-danger mt-3">DANH SÁCH NHÂN VIÊN CÔNG TY ABC</h2>
    <a href="<?= BASE_DIR; ?>?act=/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-backspace-fill m-3 text-decoration-none" viewBox="0 0 16 16">
            <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603
                 15h7.08a2 2 0 0 0 2-2zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 
                 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8z" />
        </svg>Trở Lại</a> <br>
    <table class="table container" border="1">
        <tr>
            <a class="btn btn-info m-3" href="<?= BASE_DIR; ?>?act=add">Thêm Mới Nhân Viên</a>
        </tr>
        <tr>
            <th>MaNV</th>
            <th>Hoten</th>
            <th>AnhDaiDien</th>
            <th>GioiTinh</th>
            <th>SoDienThoai</th>
            <th>DiaChi</th>
            <th>PhongBan</th>
            <th>HanhDong</th>
        </tr>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $row['MaNV']; ?></td>
                <td><?php echo $row['Hoten']; ?></td>
                <!-- <td><img src=" <?php echo $row['AnhDaiDien']; ?>" alt="Anh Dai Dien" width="100"></td> -->
                <td>
                    <?php
                    if ($row['AnhDaiDien'] != "") {
                        echo "<img src='" . IMG_PATH . $row['AnhDaiDien'] . "' alt='' width=90>";
                    }
                    ?>
                </td>
                <td><?php echo $row['GioiTinh']; ?></td>
                <td><?php echo $row['SoDienThoai']; ?></td>
                <td><?php echo $row['DiaChi']; ?></td>
                <td><?php echo $row['PhongBan']; ?></td>
                <td style="width: 30%;" class="text-center">
                    <a class="btn btn-danger" href="<?= BASE_DIR ?>?act=delete_nv&id=<?= $row['MaNV']; ?>"
                        onclick="return confirm('delete ko?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash2" viewBox="0 0 16 16">
                            <path
                                d="M14 3a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2M3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5s-3.69-.311-4.785-.793" />
                        </svg>
                    </a>
                    <a class="btn btn-warning" href="<?= BASE_DIR ?>?act=edit_nv&id=<?= $row['MaNV']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg>
                    </a>
                    <a class="btn btn-success" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                            <path
                                d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2z" />
                            <path
                                d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z" />
                        </svg>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>