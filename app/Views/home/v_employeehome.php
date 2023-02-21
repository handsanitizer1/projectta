<!DOCTYPE html>
<html lang="en">

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
    <title>Home Page Employee</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link href="assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
    Preloader start
********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
    Preloader end
********************-->

    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">

        <!--**********************************
        Nav header start
    ***********************************-->
        <div class="nav-header">
            <a href="<?= base_url('employee/home') ?>" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"><img src="assets\images\GuestBookLogo.png" style="width: 150px; height: 50px;">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>

                </svg>
                <!-- <div class="brand-title">
                <h2 class="">Fillow.</h2>
                <span class="brand-sub-title">Saas Admin Dashboard</span>
            </div> -->
            </a>
        </div>
        <!--**********************************
        Nav header end
    ***********************************-->


        <!--**********************************
        Header start
    ***********************************-->
        <div class="header">
            <div class="header-content" style="padding-left: 3rem;">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Employee Page
                            </div>
                        </div>

                    </div>
                    <ul class="header-right">


                        <a href="<?= base_url('logout') ?>" class="btn btn-danger  fs-18 mt-4">SignOut</a>
                    </ul>
            </div>
            </nav>
        </div>
    </div>

    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container">
            <div class="col">

                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <h1 style="font-size: xx-large;"><b>Meeting Request</b></h1><br>
                        </div>
                        <!-- <div class="txt-desc">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h4>
                            </div> -->
                        <div style="height:600px; overflow-y: scroll;">

                            <!-- Select * From participan where employee id = a dan employee status = null -->
                            <!-- jika karyawan accept, maka akan membuat 1 record data baru dan persis namun perbedaannya
                                adalah is employee true.,
                                sehingga setiap pengajuan meeting request, terdapat 2 record yaitu untuk user dan karyawan.,
                                yang bertujuan untuk pengisian tabel attendance dan pengisian kolom is done-->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>

                                        <a href="javascript:void(0);" class="btn btn-info">Join Event</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>

                                        <a href="javascript:void(0);" class="btn btn-info">Join Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <h1 style="font-size: xx-large;"><b>On going</b></h1><br>
                        </div>
                        <div style="height:600px; overflow-y: scroll;">

                            <!-- Select * From participan where employee id = a dan employee status = accept dan is employee = true -->
                            <!-- jika hitung pertemuan sudah selesai, maka menekan tombol selesai sehingga
                                mengganti record is done = true  -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>

                                        <a href="javascript:void(0);" class="btn btn-secondary">Join Event</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>

                                        <a href="javascript:void(0);" class="btn btn-secondary">Join Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <h1 style="font-size: xx-large;"><b>History</b></h1>
                            </div>
                            <div class="col-6"><a href="<?= base_url('employee-home') ?>" class="btn btn-danger light fs-18 text-end">Clear History</a></div>
                            <!-- Clear history = set is_deleted = true, yang dimana untuk pengambilan history,
                                 mengambil is_done true dan is_deleted = false -->
                        </div>
                        <div style="height:600px; overflow-y: scroll;">

                            <!-- Select * From participan where employee id = a dan is_done = true -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: 20px;">Card title</h5>
                                    </div>
                                    <div class="card-body" style="font-size: medium;">
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                                    </div>
                                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                        <div class="card-footer-link mb-4 mb-sm-0">
                                            <p class="card-text text-dark d-inline" style="font-size: medium;">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .content-body {
            margin-left: 0;
        }
    </style>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://instagram.com/ngrhazka" target="_blank">Nugraha Azka</a> 2021</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
        Support ticket button start
    ***********************************-->

    <!--**********************************
        Support ticket button end
    ***********************************-->



    </div>
    <!--**********************************
    Main wrapper end
***********************************-->

    <!--**********************************
    Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/dlabnav-init.js"></script>
    <script src="assets/js/demo.js"></script>
</body>

</html>