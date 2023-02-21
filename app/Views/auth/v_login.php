<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Login Page</title>

    <!-- FAVICONS ICON -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>


<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <?php if (session()->getFlashdata("Errors")) : ?>
                <div class="alert alert-danger alert-has-icon position-absolute end-0 top-0 m-3 w-25 h-20">
                    <div class="alert-body">
                        <?= session()->getFlashdata("Errors") ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata("Success")) : ?>
                <div class="alert alert-success alert-dismissable alert-has-icon fade show  position-absolute end-0 top-0 m-3 w-25 h-20" id="alert">
                    <div class="alert-body">
                        <i class="fa-solid fa-circle-check mr-2"></i><?= session()->getFlashdata("Success") ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">

                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h3 class="text-center mb-4">Sign in your account</h3>
                                    <form id="form" action="<?= base_url('/api/login') ?>" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input id="email" type="email" class="form-control" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                        <!-- <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="<?= base_url('register') ?>">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/dlabnav-init.js"></script>


    <!-- <script>
        $(() => {
            $('#form').on('submit', (e) => {
                e.preventDefault();
                e.stopPropagation();

                let username = $("email").value;
                let password = $("password").value;

                var settings = {
                    url: "http://localhost/guestbook/public/api/login",
                    method: "POST",
                    timeout: 0,
                    headers: {
                        "Accept-Language": "en",
                        "Content-Type": "application/json"
                    },
                    data: JSON.stringify({
                        "user_Name": username,
                        "user_Password": password
                    }),

                    success: (res) => {
                        let data = JSON.parse(res.body);
                        location.href = "<?= base_url('/') ?>";
                    },
                    // user role
                    error: (xhr) => {
                        if (xhr.status == 400) {
                            alert("an official error message");
                        }
                    }
                };

                $.ajax(settings);
            });
        });
    </script> -->
</body>

</html>