<?php
//require "./php/common.php";
//require "./php/config.php";
//require "./common/func.php";
//
//?>
<!doctype html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIPTIP</title>
    <link rel="stylesheet" href="./public/css/bs/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/hover.css">
    <link href="./public/fonts/stylesheet.css" rel="stylesheet">
    <link href="./public/css/fonts.css" rel="stylesheet">
    <link href="./public/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<section class="section_header">
    <header>
        <div class="toplink">
            <ul class="nav">
                <li class="nav-item"><a href="#">ثبت نام</a></li>
                <li class="nav-item"><a href="#">ورود</a></li>
            </ul>
        </div>
        <div class="left_header">
            <div class="navbar">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="active">VIP</a></li>
                    <li class="nav-item"><a href="#">فروشگاه</a></li>
                    <li class="nav-item"><a href="#">کودک</a></li>
                    <li class="nav-item"><a href="#">بانوان</a></li>
                    <li class="nav-item"><a href="#">آقایان</a></li>
                    <li class="nav-item"><a href="#">زیورآلات</a></li>
                </ul>
            </div>
            <div class="logo">
                <img src="./public/img/logo.png">
            </div>
        </div>
    </header>

    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <!-- wave-decoration start -->

    <!-- wave-decoration start -->
    <div class="wave-decoration is-white-light ">
        <!-- wave start -->
        <svg width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 1998.1 109" style="enable-background:new 0 0 1998 109;" xml:space="preserve">

            <path opacity="0.2" fill="#fff" class="st012"
                  d="M-1,107.6c346,0.6,524.3,4.7,878.4-4.4c286.6-7.4,442.5-54,608.3-51.2c205.4,3.5,310.3,72.8,513.3,49.7V1.2L-1,1.7V107.6z"></path>
            <path opacity="0.2" fill="#fff" class="st012"
                  d="M1997.5,83.8c-251.3,30.8-441.2-38.7-499.9-52.4c-54.7-12.8-122.5-12-186.7,5.3c-154.2,41.6-315.5,70.9-475.2,67.5c-159.6-3.4-324.4-22.4-484.1-19.7C218.6,86.8,49,82.8-1,80.8C-1,59.5-1,1.1-1,1.1h1998.8L1997.5,83.8z"></path>
            <path opacity="0.4" fill="#fff" class="st112"
                  d="M-2,88.7c139.8,12.7,219.9,10.7,360.2,11.1c285.5,0.8,487.5-18.1,736.2-51.2C1351,14.4,1451.5,13.3,1799,76.2c58.9,10.6,140,8,200,1.3V0H-1.5L-2,88.7z"></path>
            <path fill="#fff"
                  d="M362.6,79.6c193.8-11.8,366.7-24.8,568.8-49.9c110.2-13.7,221.1-21.6,332.2-19.6c187,3.3,344.8,29.7,561.3,69.8c122.2,22.6,173.2,4,173.2,4V0H0v83.7C0,83.7,166.1,91.7,362.6,79.6z"></path>
            </svg>
        <!-- wave end -->
    </div>
    <!-- wave-decoration end -->

    <!-- wave-decoration end -->
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 WAVE 2 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

</section>

<div class="fancybox_platform">
    <div class="fancybox_signup">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="fancy_header">
            <h4>SignOut</h4>
            <img src="./public/img/logo.png">
        </div>
        <div class="fancy_main">
            <form class="mt-2" id="form" name="form" action="">
                <div class="gender">
                    <input id="rate0" class="check-object" type="radio" title="کاربر طلایی" name="rate"
                           value="1">
                    <label for="rate0" class="form-check-label font-weight-bold gold mr-2">مرد</label>
                    <input id="rate1" class="check-object" type="radio" title="کاربر نقره ای"
                           name="rate"
                           value="2">
                    <label for="rate1" class="form-check-label font-weight-bold silver mr-2">زن</label>
                </div>

                <div class="group-column">
                    <label class="font-weight-bold mt-4 text-white" for="user_name"><i class="icon-user"></i>نام</label>
                    <input class="input" title="نام" type="text" name="user_name" id="user_name"
                    >

                    <label class="font-weight-bold mt-4 text-white" for="family"><i class="icon-diamond"></i>نام
                        خانوادگی</label>
                    <input class="input" title="نام خانوادگی" type="text" name="family" id="family"
                    >
                    <label class="font-weight-bold mt-4 text-white" for="email"><i class="icon-vanak-email"></i>رایانامه</label>
                    <input class="input" title="رایانامه" type="email" name="email" id="email"
                    >
                    <label class="font-weight-bold mt-4 text-white" for="mobile"><i class="icon-phone2"></i>شماره
                        تماس</label>
                    <input class="input" title="شماره تماس" type="text" name="mobile" id="mobile"
                    >
                </div>

                <div class="signup_btn">
                    <button class="btn vipbtn" id="submit" type="button" value="Submit">
                        ثبت نام
                    </button>
                </div>
            </form>
        </div>
        <div class="fancy_footer">
            <p>لطفا مشخصات خود را با دقت وارد نمایید</p>
        </div>
    </div>
    <div class="fancybox_login">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="fancy_header">
            <h4>SignIn</h4>
            <img src="./public/img/logo.png">
        </div>
        <div class="fancy_main">
            <form class="mt-2" id="form" name="form" action="">
                <div class="group-column">
                    <label class="font-weight-bold mt-4 text-white" for="user_name">نام</label>
                    <input class="input" title="نام" type="text" name="user_name" id="user_name">
                    <label class="font-weight-bold mt-4 text-white" for="family">نام خانوادگی</label>
                    <input class="input" title="نام خانوادگی" type="text" name="family" id="family">
                </div>
                <div class="signup_btn">
                    <button class="btn vipbtn" id="submit" type="button" value="Submit">
                        ورود
                    </button>
                </div>
            </form>
        </div>
        <div class="fancy_footer">
            <input id="rate0" class="check-object" type="checkbox" title="کاربر طلایی" name="rate"
                   value="1">
            <label for="rate0" class="form-check-label font-weight-bold gold mr-2">Remember Me</label>
        </div>
    </div>
</div>

<div class="comercial">
    <h3>VipChap Compony</h3>
    <h4>Best Online Logo Maker</h4>
    <h5>Make Your Brand Bigger and Bigger</h5>
</div>

<!--<section>-->
<!--    <div class="job_title_platform mt-3">-->
<!--        <div class="job_title">-->
<!--            <div class="circle">-->
<!--                <i class="icon-envelope"></i>-->
<!--            </div>-->
<!--            <div class="circle">-->
<!--                <i class="icon-bowling-ball"></i>-->
<!--            </div>-->
<!--            <div class="circle">-->
<!--                <i class="icon-dice"></i>-->
<!--            </div>-->
<!--            <div class="circle">-->
<!--                <i class="icon-image"></i>-->
<!---->
<!--            </div>-->
<!--            <div class="circle">-->
<!--                <i class="icon-copyright"></i>-->
<!---->
<!--            </div>-->
<!--            <div class="circle">-->
<!--                <i class="icon-vanak-instagram"></i>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="cart_section">
    <div class="cart_platform">
        <div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div><div class="cart">
            <div class="cart-header">
                <img src="./public/img/store/cloth/images.jpg" class="cart-img-top" alt="...">
            </div>
            <div class="cart-body">
                <h5 class="cart-title">cart title</h5>
                <p class="cart-text">Some quick example text to build on the cart title and make up the bulk of the
                    cart's
                    content.</p>
            </div>
            <div class="cart-footer">
                <span class="cart-link">
                    <i class="icon-vanak-star"></i>
                    <i class="icon-vanak-home"></i>
                    <i class="icon-search-plus"></i>
                </span>
                <a href="#" class="btn btn-warning">Go somewhere</a>

            </div>
        </div>
    </div>
</section>




<script src="./public/js/jquery-3.4.1.js"></script>
<script src="./public/js/jqueryapp.js"></script>
<script src="./public/js/app.js"></script>
<script src="./public/css/bs/js/bootstrap.js"></script>
</body>
</html>
