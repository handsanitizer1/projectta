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
    <title>Home Page</title>

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
            <a href="<?= base_url('home') ?>" class="brand-logo">
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
                                Dashboard
                            </div>
                        </div>

                    </div>
                    <ul class="header-right">
                        <!-- <a href="<?= base_url('') ?>" class="btn btn-danger  fs-18 mt-4">Sign Out</a> -->
                        <li class="nav-item dropdown  header-profile">
                            <a class="has-arrow" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <h4 class="btn btn-dark mt-3">Another Option</h4>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#update" class="dropdown-item ai-icon" style="letter-spacing: 8px;">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <button style="padding: 0;  margin: 0 !important; width: 100%; border:none; background:none;" class="text-start" data-bs-toggle="modal" data-bs-target="#edit"> User</button>
                                </a>
                                <a href="#inbox" class="dropdown-item ai-icon" style="letter-spacing: 8px;">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <button style="padding: 0;  margin: 0 !important; width: 100%; border:none; background:none;" class="text-start" data-bs-toggle="modal" data-bs-target="#inbox"> Inbox</button>
                                </a>
                                <a href="#history" class="dropdown-item ai-icon" style="letter-spacing: 8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock text-dark" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                    <button style="padding: 0;  margin: 0 !important; width: 100%; border:none; background:none;" class="text-start" data-bs-toggle="modal" data-bs-target="#history"> History</button>
                                </a>
                                <a href="<?= base_url('logout') ?>" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </li>
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
        <?php if (session()->getFlashdata("Errors")) : ?>
            <div class="alert alert-danger alert-has-icon position-absolute end-0 top-0 m-3 w-25 h-20">
                <div class="alert-body">
                    <?= session()->getFlashdata("Errors") ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">

            <div class="col">
                <div class="row">
                    <h1 style="font-size: xx-large;"><b>Events Available</b></h1><br>
                </div>
                <div class="row">
                    <div class="col-8">
                        <!-- <div class="txt-desc">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h4>
                            </div> -->
                        <div style="height:600px; overflow-y: scroll;">
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

                                        <a href="javascript:void(0);" class="btn btn-info" onclick="insertData(this);return false;">Join Event</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size: larger;">Card title</h5>
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
                                        <h5 class="card-title" style="font-size: larger;">Card title</h5>
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
                        <div class="col-12" style="position: sticky;">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h2>Ongoing Activities</h2>

                                    <button type="button" class="btn btn-success light mb-2" data-bs-toggle="modal" data-bs-target="#history"><b>See Activities</b></button>
                                </div>
                            </div>
                        </div><br>

                        <div class="col-12" style="position: sticky;">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h1 class="card-title" style="font-size: 24px;"><b>Request Meet</b></h1>
                                </div>
                                <div class="card-body">

                                    <p class="card-text" style="font-size: 18px;">
                                        Have an appointment with our employees? or want to propose a meeting with our employees?<br><br>
                                        Fill in the link below if you want to request a meeting
                                    </p>
                                    <!-- <a href="javascript:void(0);" class="btn btn-primary">Request Meet</a> -->
                                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#request">Request Meet</button>
                                </div>
                            </div>
                        </div><br>

                        <!-- <div class="col-12" style="position: sticky;">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h2>Inbox and History</h2>

                                        <button type="button" class="btn btn-warning light mb-2" data-bs-toggle="modal" data-bs-target="#inbox"><b>Inbox</b></button>
                                        <button type="button" class="btn btn-success light mb-2" data-bs-toggle="modal" data-bs-target="#history"><b>History</b></button>
                                    </div>
                                </div>
                            </div><br> -->
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

// ongoing = employee status acc dan range tanggal sebelum tenggat (jika tenggat, maka memunculkan button)


<!-- mengambil data participan yang dimana employee status is not null (acc / delete) dan is_employee = false -->
<div class="modal" tabindex="-1" id="inbox">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Inbox</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Request for a meeting with Mr/Ms "a" on date "a" at "a" has been "a" with reason <br>"a"</p>
                <!-- select * from participant WHERE  id user = a AND event status is not null AND is done = false -->
                <p>Request for a meeting with Mr/Ms "a" on date "a" at "a" has been "a" with reason <br>"a"</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="history">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">History</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Meeting success with Mr/Ms "a" on date "a" at "a" </p>
                <!-- SELECT*FROM participant WHERE id user = a AND is done = true  -->
                <p>Request for a meeting with Mr/Ms "a" on date "a" at "a" has been "a" with reason <br>"a"</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="request">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Request Meet</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label>Request To</label>
                        <select class="default-select form-control wide mb-3">
                            <option>Option 1</option>
                        </select>
                    </div>
                    <label>Date & Time</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" placeholder="Select Date" required>
                    </div>
                    <div class="col-sm-6 mt-2 mt-sm-0">
                        <input type="time" class="form-control" placeholder="Select Time" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Purpose</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Enter Purpose" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit User</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body" method="POST" action="<?= base_url('/api/editProcess') ?>">
                <div class="row">
                    <input value="<?= $data_user['id'] ?>" name="id" type="hidden" class="form-control">
                    <div class="mb-3">
                        <label class="mb-1"><strong>Name</strong></label>
                        <input value="<?= $data_user['user_name'] ?>" type="text" class="form-control" name="name" placeholder="enter name" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Telephone</strong></label>
                        <input value="<?= $data_user['phone'] ?>" type="number" class="form-control" name="phone" placeholder="enter telephone number" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Address</strong></label>
                        <input value="<?= $data_user['address'] ?>" type="text" class="form-control" name="address" placeholder="enter address" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input value="<?= $data_user['user_email'] ?>" type="email" class="form-control" name="email" placeholder="enter email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function insertData(data) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>