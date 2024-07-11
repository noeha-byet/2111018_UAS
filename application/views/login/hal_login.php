<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Favicons -->
    <!-- <link href="<?= base_url(); ?>assets/PhotoFolio/assets/img/favicon.png" rel="icon"> -->
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url(); ?>assets/PhotoFolio/assets/css/main.css" rel="stylesheet">

    <style type="text/css">
        .form-floating {
            box-shadow: 0px 0px 5px;
            color: #198754;
            border-radius: 15px;
        }

        .btn:hover {
            box-shadow: 0px 0px 10px;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-dark">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card text-center rounded-lg bg-dark" style="box-shadow: 0px 0px 5px; color: #198754; margin-top: 100px;">
                                <div class="card-header">
                                    <h3 class="text-center text-success font-weight-medium my-4"><span class="underlight">Login Administrator</span></h3>
                                </div>
                                <div class="card-body text-center bg-outline-success">
                                    <form action="login/aksi_login" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control border-success bg-dark text-white" id="inputEmail" type="text" name="username" placeholder="Username" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control border-success bg-dark text-white" id="inputPassword" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center mt-4 mb-0">
                                            <input type="submit" class="btn btn-success text-center" style="width: 100%;" value="Login">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <small><i>Masuk untuk mengubah konten</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>



    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <!-- <script src="<?= base_url(); ?>assets/PhotoFolio/assets/js/main.js"></script> -->
</body>

</html>