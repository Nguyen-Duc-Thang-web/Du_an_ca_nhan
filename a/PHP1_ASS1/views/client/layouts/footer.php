<footer class="bg-light py-4">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <p class="text-center">
                    &copy; 2024 HT Watch. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR; ?>?act=login" method="post">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Login User
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control shadow-none" required />
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none" required />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASE_DIR; ?>?act=register" method="post">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Register User
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control shadow-none" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Login User</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>