<?php define('ABC', __DIR__ . '/../../');

include ABC . 'admin/layouts/header.php'; ?>
<main class="container mt-3">
    <h2 class="text-center text-danger display-4 custom-font">DANH SÁCH SẢN PHẨM !<br>
    </h2>
    <div class="container m-3">
        <div class="row align-items-center">
            <div class="col-md-4 mb-3 mb-md-0">
                <!-- <a class="btn btn-info btn-block" href="#">Thêm Sản Phẩm</a> -->
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#add_sp">
                    Thêm sản phẩm
                </button>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <input class="form-control" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-success btn-block" type="submit">Tìm kiếm</button>
            </div>
        </div>

    </div>
    <table class="table table-hover table-bordered">

        <thead>
            <tr>
                <th>ID </th>
                <th>TÊN SẢN PHẨM</th>
                <th>ẢNH SẢN PHẨM</th>
                <th>DANH MỤC SẢN PHẨM</th>
                <th>SỐ LƯỢNG SẢN PHẨM</th>
                <th>GIÁ SẢN PHẨM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $a) { ?>
                <tr>
                    <td><?= $a['id'] ?></td>
                    <td><?= $a['name'] ?></td>
                    <td> <?php
                    if ($a['image'] != "") {
                        echo "<img src='" . IMG_PATH . $a['image'] . "' alt='' width=90>";
                    }
                    ?></td>
                    <td><?= $a['danhmuc_id'] ?></td>
                    <td><?= $a['quantity'] ?></td>
                    <td><?= number_format($a['price'], 0, ',', '.') ?> VND</td>
                    <td class="text-center">
                        <a class="btn btn-warning" href="<?= BASE_DIR ?>?act=edit_sp&id=<?= $a['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </a>
                        <a class="btn btn-danger" href="<?= BASE_DIR ?>?act=delete_sp&id=<?= $a['id']; ?>"
                            onclick="return confirm('delete ko?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash2" viewBox="0 0 16 16">
                                <path
                                    d="M14 3a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2M3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5s-3.69-.311-4.785-.793" />
                            </svg>
                        </a>
                        <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_sp"
                            data-id="<?= htmlspecialchars($a['id']); ?>" data-name="<?= htmlspecialchars($a['name']); ?>">
                            Sửa
                        </button> -->
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
<div class="modal fade" id="add_sp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR; ?>?act=create_sp" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> THÊM MỚI SẢN PHẨM
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">TÊN</label>
                        <input name="name" type="text" class="form-control shadow-none" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DANH MỤC</label>
                        <select name="danhmuc_id" class="form-control shadow-none">
                            <?php foreach ($danhmuc as $a): ?>
                                <option value="<?= $a['id']; ?>"><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">GIÁ</label>
                        <input name="price" type="number" class="form-control shadow-none" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label">SỐ LƯỢNG</label>
                        <input name="quantity" type="number" class="form-control shadow-none" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label">ẢNH</label>
                        <input name="image" type="file" class="form-control shadow-none" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="btnend" class="btn btn-info shadow-none">
                            THÊM MỚI
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<!-- <div class="modal fade" id="edit_sp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR ?>?act=edit_sp&id=<?= $product['id']; ?>" method="post" class="m-5"
                enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">TÊN</label>
                    <input name="name" type="text" class="form-control shadow-none" value="<?= $product['name']; ?>" />
                </div>
                <div class="mb-3">
                    <label class="form-label">DANH MỤC</label>
                    <select name="danhmuc_id" class="form-control shadow-none">
                        <?php foreach ($danhmucs as $a): ?>
                            <option value="<?= $a['id']; ?>" <?= $a['id'] == $product['danhmuc_id'] ? 'selected' : ''; ?>>
                                <?= $a['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">GIÁ</label>
                    <input name="price" type="number" class="form-control shadow-none"
                        value="<?= $product['price']; ?>" />
                </div>
                <div class="mb-4">
                    <label class="form-label">SỐ LƯỢNG</label>
                    <input name="quantity" type="number" class="form-control shadow-none"
                        value="<?= $product['quantity']; ?>" />
                </div>
                <div class="mb-4">
                    <label class="form-label">ẢNH</label>
                    <input name="image" type="file" class="form-control shadow-none" />
                    <input type="hidden" name="old_image" value="<?= $product['image']; ?>">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" name="btnupdate" class="btn btn-info shadow-none">
                        CẬP NHẬT
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<?php

include ABC . 'admin/layouts/footer.php'; ?>