<?php
$is_logged_in = isset($_SESSION['user']);
?>
<?php include 'layouts/header.php';
?>
<main class="">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= IMG_PATH ?>Untitled-3.png" alt="Los Angeles" height="200%" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="<?= IMG_PATH ?>Untitled-3.png" alt="Chicago" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="<?= IMG_PATH ?>Untitled-3.png" alt="New York" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Card Grid -->
  <div class="row mt-1">
    <h2 class="text-center text-danger">Sản Phẩm Nổi Bật</h2>
    <?php foreach ($data as $a) { ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="<?= IMG_PATH . $a['image'] ?>" data-lightbox="image-1">
            <img src="<?= IMG_PATH . $a['image'] ?>" alt="Image placeholder" class="img-fluid">
          </a>
          <div class="card-body">
            <h5 class="card-title text-info text-center"><?= $a['name'] ?></h5>
            <h6 class="card-price text-danger text-center" style="font-size:1.5vw">
              <?= number_format($a['price'], 0, ',', '.') ?> VND
            </h6>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</main>
<?php include 'layouts/footer.php';
?>