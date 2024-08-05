<?php define('ABC', __DIR__ . '/../../');

include ABC . 'admin/layouts/header.php'; ?>
<main class="container mt-3">
    <h2 class="text-center text-danger display-4 custom-font">SỬA SẢN PHẨM !<br>
    </h2>
    <div class="card m-2">
        <form method="post" class="m-5" enctype="multipart/form-data">
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
                <input name="price" type="number" class="form-control shadow-none" value="<?= $product['price']; ?>" />
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
                <?php
                if ($product['image'] != "") {
                    echo "<img src='" . IMG_PATH . $product['image'] . "' alt='' width=90>";
                }
                ?>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" name="btnupdate" class="btn btn-info shadow-none">
                    CẬP NHẬT
                </button>
            </div>
        </form>
    </div>
</main>
<?php

include ABC . 'admin/layouts/footer.php'; ?>