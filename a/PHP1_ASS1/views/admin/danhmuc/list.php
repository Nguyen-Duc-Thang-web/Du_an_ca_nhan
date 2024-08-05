<?php define('ABC', __DIR__ . '/../../');

include ABC . 'admin/layouts/header.php'; ?>
<main class="container mt-3">
    <h2 class="text-center text-danger display-4 custom-font">DANH SÁCH DANH MỤC !<br>
    </h2>
    <div class="container m-3">
        <div class="row align-items-center">
            <div class="col-md-4 mb-3 mb-md-0">
                <!-- <a class="btn btn-info btn-block" href="#">Thêm Sản Phẩm</a> -->
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#add_dm">
                    Thêm Danh Mục
                </button>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <input class="form-control" type="search" placeholder="Tìm kiếm danh mục" aria-label="Search">
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-success btn-block" type="submit">Tìm kiếm</button>
            </div>
        </div>
    </div>
    <table class="table container table-hover table-bordered">
        <thead>
            <tr>
                <th style="width: 5%;">ID </th>
                <th style="width: 70%;">TÊN DANH MỤC</th>
                <th style="width: 25%;" class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($data as $danhmuc): ?>
                <tr>
                    <td><?= $danhmuc['id'] ?></td>
                    <td><?= $danhmuc['name'] ?></td>
                    <td style="display: flex; justify-content:center">
                        <a class="btn btn-warning " href="<?= BASE_DIR ?>?act=edit_dm&id=<?= $danhmuc['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </a>
                        <a class="btn btn-danger ml-3" href="<?= BASE_DIR ?>?act=delete_dm&id=<?= $danhmuc['id']; ?>"
                            onclick="return confirm('delete ko?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash2" viewBox="0 0 16 16">
                                <path
                                    d="M14 3a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2M3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5s-3.69-.311-4.785-.793" />
                            </svg>
                        </a>
                        <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_dm"
                            data-id="<?= htmlspecialchars($danhmuc['id']); ?>"
                            data-name="<?= htmlspecialchars($danhmuc['name']); ?>">
                            Sửa
                        </button> -->
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<div class="modal fade" id="add_dm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR; ?>?act=add_dm" method="post">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Thêm Mới Danh Mục
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">TÊN</label>
                        <input name="name" type="text" class="form-control shadow-none" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-info shadow-none">
                            THÊM MỚI
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_dm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR ?>?act=edit_dm&id=<?= $danhmuc['id']; ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Sửa Danh Mục
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $danhmucs['id']; ?>">
                        <label class="form-label">TÊN</label>
                        <input name="name" type="text" class="form-control shadow-none"
                            value="<?= $danhmucs['name']; ?>" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button name="btnupdate" type="submit" class="btn btn-info shadow-none">
                            Cập Nhật
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="bg-light py-4">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <p class="text-center">&copy; 2024 HT Watch. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>