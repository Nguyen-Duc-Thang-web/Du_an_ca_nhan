<?php
define('ABC', __DIR__ . '/../../');
$is_logged_in = isset($_SESSION['user']);
include ABC . 'client/layouts/header.php';
?>
<main class="m-5">
    <div class="row mt-5">
        <?php foreach ($data as $a) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= IMG_PATH . htmlspecialchars($a['image']) ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-info text-center"><?= htmlspecialchars($a['name']) ?></h5>
                        <h6 class="card-subtitle mb-2  text-danger text-center">
                            <?= number_format($a['price'], 0, ',', '.') ?>
                            VND
                        </h6>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php include ABC . 'client/layouts/footer.php'; ?>