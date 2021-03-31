<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Ecuaturismo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
</head>

<script>
    $('.portfolio-menu ul li').click(function() {
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter: selector
        });
        return false;
    });
    $(document).ready(function() {
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
</script>

<body>
    <!-- Header -->
    <header id="header" class="bg-dark">
        <div class="header-page container-page">
            <nav class="nav-bar">
                <div class="brand">
                    <a href="/" class="text-decoration-none">
                        <h1><span class="span-ecua">ECUA</span> <span class="span-turismo">TURIS</span>MO</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="/" data-after="Home">INICIO</a></li>
                        <li><a href="/blog" data-after="Service">BLOG</a></li>
                        <li><a href="/destinos" data-after="Projects">DESTINOS</a></li>
                        <li><a href="#about" data-after="About">NOSOTROS</a></li>
                        <li><a href="/contacto" data-after="Contact">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <div class="min-vh-100 text-center p-4" style="margin-top: 10rem;">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h2>Observa los increíbles luagares turísticos que tiene el Ecuador</h2>
            </div>
        </div>
        <div class="portfolio-item row p-4">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/beautiful-girl-near-wall_1157-16401.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/beautiful-girl-near-wall_1157-16401.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/woman-taking-photograph-her-boyfriend-enjoying-piggyback-ride-his-back_23-2147841613.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/woman-taking-photograph-her-boyfriend-enjoying-piggyback-ride-his-back_23-2147841613.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/girl-smiling-making-auto-photo-with-her-friends-around_1139-593.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/girl-smiling-making-auto-photo-with-her-friends-around_1139-593.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer container-page">
            <div class="brand">
                <h1><span>S</span>haif <span>A</span>rfan</h1>
            </div>
            <h2>Your Complete Web Solution</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="https://www.facebook.com/Ecua-Turismo-101221585389347" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.instagram.com/ecua_turismo_ec/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
                </div>
            </div>
            <p>Copyright © 2020 Arfan. All rights reserved</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="../js/index.js"></script>
</body>

<style>
    .portfolio-menu {
        text-align: center;
    }

    .portfolio-menu ul li {
        display: inline-block;
        margin: 0;
        list-style: none;
        padding: 10px 15px;
        cursor: pointer;
        -webkit-transition: all 05s ease;
        -moz-transition: all 05s ease;
        -ms-transition: all 05s ease;
        -o-transition: all 05s ease;
        transition: all .5s ease;
    }

    .portfolio-item {
        /*width:100%;*/
    }

    .portfolio-item .item {
        /*width:303px;*/
        float: left;
        margin-bottom: 10px;
    }
</style>

</html>