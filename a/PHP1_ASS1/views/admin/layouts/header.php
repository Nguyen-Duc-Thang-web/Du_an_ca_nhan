<?php
$is_logged_in = isset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>HP Watch</title>
    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        .h-font {
            font-family: "Merienda", cursive;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HT Watch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation shadow-none">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASE_DIR; ?>?act=list_dm">
                                Danh Mục
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="<?= BASE_DIR; ?>?act=list_sp">Sản Phẩm</a>
                        </li>
                    </ul>
                </div> <?php if (!$is_logged_in): ?>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#RegisterModal">Register</button>
                <?php else: ?>
                    <a class="btn btn-outline-dark shadow-none mr-3" href="<?= BASE_DIR; ?>?act=/">Trang Chủ</a>
                    <a class="btn btn-outline-dark shadow-none" href="<?= BASE_DIR; ?>?act=logout">Logout</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>