<?php define('ABC', __DIR__ . '/../../');

include ABC . 'admin/layouts/header.php'; ?>
<main class="container mt-3">
    <h2 class="text-center text-danger display-4 custom-font">SỬA SẢN PHẨM !<br>
    </h2>
    <div class="card m-2">

        <form method="post" class="m-5" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $danhmucs['id']; ?>">
            <div class="mb-3">
                <label class="form-label">TÊN</label>
                <input name="name" type="text" class="form-control shadow-none" value="<?= $danhmucs['name']; ?>" />
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" name="btnupdate" class="btn btn-info shadow-none">
                    CẬP NHẬT
                </button>
            </div>
        </form>
    </div>
</main><?php

include ABC . 'admin/layouts/footer.php'; ?>