<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
    <!-- HEADER -->
    <div class="container-fluid">
        <div class="row nav">
            <div class="col-md2">
                <img src="assets\images\GuestBookLogo.png" style="width: 150px; height: 50px; margin-top: 22px; margin-left: 20px;">
            </div>
            <div class="col-md-5">
                <div class="logo">
                    <h3>PT. ABCD</h3>
                    <p>Join Now!</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="btn-s">
                    <a href="<?= base_url('login') ?>" class="btn btn-secondary btn-rounded fs-18" style="margin-top: 8px;">Sign In</a>
                    <a href="<?= base_url('register') ?>" class="btn btn-dark btn-rounded fs-18" style="margin-top: 8px;">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pad">
        <div class="row">
            <div class="col-md-12">
                <div class="absolute-txt">
                    <h3>No 1 <strong>Expert</strong> <br>
                        Visa
                        <strong>Immigration and <br>
                            Legal Consultation</strong>
                    </h3>
                </div>
                <div class="slider">
                    <img src="assets/images/kelly-sikkema-9OGNpJPVMZ8-unsplash.jpg" alt="">
                    <img src="assets/images/sonia-jahandari-Iz_dQ_t_9HE-unsplash.jpg" alt="">
                    <img src="assets/images/jaredd-craig-HH4WBGNyltc-unsplash.jpg" alt="">
                    <img src="assets/images/janko-ferlic-sfL_QOnmy00-unsplash.jpg" alt="">
                    <img src="assets/images/mikolaj-DCzpr09cTXY-unsplash.jpg" alt="">

                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about">
                    <h2>About Us</h2>
                    <p>Trusted, Easy, Service No. 1</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="about">
                    <p>We are working since 2012 as a Visa agency with good service providing for our customers, we have an expert team and all are ready to give you support. Let the Global Agency Bali team be your agents. We will do the heavy lifting for you. You, on the other hand, will just focus on what’s important for your business core. We are always open for discussion. Just let us know, and we will be there every step of the way.</p>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="about-img">
                    <img src="assets/images/glenn-carstens-peters-RLw-UC03Gwc-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot">
                        <h3>GuestBook</h3>
                        <p>Global Agency is the world’s largest
                            & most secure digital service
                            providing best agency</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foot-2">
                        <h3>Our Service</h3>
                        <ul>
                            <li>Visa Service</li>
                            <li>Legal Document</li>
                            <li>Company Establishment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foot-2">
                        <h3>Information</h3>
                        <ul>
                            <li>Contoh@gmail.com</li>
                            <li>+628739071238</li>
                            <li>Jalan Kohona pojokan German</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foot-2">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>Contoh@gmail.com</li>
                            <li>+628739071238</li>
                            <li>Jalan Kohona pojokan German</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>&#169; Guest Book, All Rights Reserved. Design By Reza Fabian Pahlevi Ahmad</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<style>
    .foot-2 h3 {
        font-weight: 700;
        font-size: 20px;
        color: #000000;
        margin-bottom: 40px;
    }

    .foot-2 ul {
        list-style: none;
        padding-left: 0;
    }

    .foot-2 li {
        text-decoration: none;
        margin-top: 25px;
        margin-bottom: 0;
        color: #888888;
        font-weight: 400;
        font-size: 16px;
    }

    .foot-2 {
        margin-left: 60px;
    }

    .about-img img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 30px;
    }

    .about h2 {
        color: black;
        font-weight: 700;
        font-size: 50px;
        line-height: 61px;
        margin-top: 20px;
    }

    .foot h3 {
        font-size: 30px;
        font-weight: bold;
    }

    .foot p {
        color: #888888;
        font-weight: 500;
        font-size: 16px;
        padding-top: 15px;
    }

    .about p {
        color: #888888;
        font-weight: 500;
        font-size: 16px;
        padding-top: 15px;

    }

    .container {
        margin-top: 100px;
        min-width: 1400px;
    }

    .absolute-txt h3 {
        position: absolute;
        font-size: 55px;
        font-weight: 400;
        z-index: 9;
        color: white;
        top: 80px;
        left: 100px;
    }

    .absolute-txt {
        width: 50%;
    }

    .pad {
        padding-top: 95px;
    }

    .pad .col-md-12 {
        padding: 0;
    }

    .slider img {
        height: 500px;
        width: 100%;
        object-fit: cover;
    }

    .nav {
        backdrop-filter: blur(20px);
        background-color: whitesmoke;
        position: fixed;
        z-index: 99;
        width: 100%;
    }

    .btn-s {
        margin-top: 20px;
        text-align: end;
    }

    .btn-h .logo h3 {
        font-size: 35px;
    }

    .logo p {
        font-size: 14px;
        font-weight: 400;
    }

    .logo {
        margin-top: 15px;
    }

    .btn-i {
        border: 0;
        padding: 10px 15px;
        background-color: whitesmoke;
        font-family: sans-serif;
    }

    .btn-u {
        border: 0;
        padding: 10px 15px;
        background-color: purple;
        color: white;
        border-radius: 15px;
        font-family: sans-serif;
    }

    .slick-dots {
        list-style: none;
        padding-left: 0;
        display: inline-flex;
        position: absolute;
        top: 85%;
        left: 45%;

    }

    .slick-dots li {
        font-size: 0;
        padding: 10px;
    }

    .slick-dots button {
        padding: 8px;
        border: 0;
        border-radius: 50%;
        background-color: grey;
    }
</style>