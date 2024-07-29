<!doctype html>
<html lang="en">

<head>
    <title>Kopi DM - Masuk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('login/css/style.css'); ?>">

    <link rel="shortcut icon" href="<?php echo base_url('images/logokopi.png'); ?>" type="image/png">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Website Inventory - Kopi DM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(<?= base_url('images/kopi.jpg'); ?>);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Selamat Datang</h3>
                                </div>
                            </div>
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url('/auth/login'); ?>" class="signin-form" method="post">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama Pengguna</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox mb-0">Ingat Saya
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Lupa Sandi?</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center"><a href="<?= base_url('/'); ?>">Kembali</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('login/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('login/js/popper.js'); ?>"></script>
    <script src="<?= base_url('login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('login/js/main.js'); ?>"></script>
</body>

</html>