<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title> Aribaan -@yield('title') </title>

    {{--<link href="{{asset('dist\css\test.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('dist\css\bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dist\css\test.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('dist\css\font-awesome.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('dist\css\scroll.css')}}" rel="stylesheet">
    @yield('css')

</head>
<body>

<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
    <!-- top nav -->
    <nav class="navbar navbar-top hidden-xs">
        <div class="container">
            <!-- left nav top -->
            <ul class="nav navbar-nav pull-left">
                <li><a href="#"><span class="glyphicon glyphicon-thumbs-up text-white"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-globe text-white"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-pushpin text-white"></span></a></li>
                <li><a href="#"><span class="text-white">QUESTIONS? CALL: <b>+963000000000</b></span></a></li>
            </ul>
            <!-- right nav top -->
            <ul class="nav navbar-nav pull-right">
                <li><a href="#" class="text-white">About Us</a></li>
                <li><a href="#" class="text-white">صفحه اصلی</a></li>
            </ul>
        </div>
        <div class="dividline light-grey"></div>
    </nav>
    <!-- down nav -->
    <nav class="navbar navbar-down">
        <div class="container">
            <div class="flex-container">
                <div class="navbar-header flex-item">
                    <div class="navbar-brand" href="#">ARIBAAN</div>
                </div>
                <ul class="nav navbar-nav flex-item hidden-xs">
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">TheTeam</a></li>
                </ul>
                <ul class="nav navbar-nav flex-item hidden-xs pull-right">
                    <li><a href="#" class="">offer!</a></li>
                </ul>
                <!-- dropdown only moblie -->
                <div class="dropdown visible-xs pull-right">
                    <button class="btn btn-default dropdown-toggle " type="button" id="dropdownmenu"
                            data-toggle="dropdown">
                        <span class="glyphicon glyphicon-align-justify"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">TheTeam</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</nav>
<!--bg img  -->
<header>
    <img src="pic/25.jpg" style="width:100%; height: 500px; ">
</header>
{{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--<!-- Indicators -->--}}
{{--<ol class="carousel-indicators">--}}
{{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--<li data-target="#myCarousel" data-slide-to="3"></li>--}}
{{--</ol>--}}
<!-- Wrapper for slides -->
{{--<div class="carousel-inner" role="listbox">--}}
{{--<div class="item active">--}}
{{--<img src="pic/1.jpg" width="460" height="345">--}}
{{--</div>--}}
{{--<div class="item">--}}
{{--<img src="pic/2.jpg" width="460" height="345">--}}
{{--<div class="carousel-caption">--}}
{{--<h3>Chania</h3>--}}
{{--<p>The atmosphere in Chania has a touch of Florence and Venice.</p>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="item">--}}
{{--<img src="pic/3.jpg" width="460" height="345">--}}
{{--<div class="carousel-caption">--}}
{{--<h3>Flowers</h3>--}}
{{--<p>Beautiful flowers in Kolymbari, Crete.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="item">--}}
{{--<img src="pic/4.jpg" width="460" height="345">--}}
{{--<div class="carousel-caption">--}}
{{--<h3>Flowers</h3>--}}
{{--<p>Beautiful flowers in Kolymbari, Crete.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- Left and right controls -->
{{--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">--}}
{{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--<span class="sr-only">Previous</span>--}}
{{--</a>--}}
{{--<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">--}}
{{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--<span class="sr-only">Next</span>--}}
{{--</a>--}}

<!-- Benefits
================================================== -->
<div class="container">
    <section class="service-sec" id="benefits">
        <div class="packet">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>
                            <small>Honey</small>
                            To enjoy the glow of good health, you must exercise
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- About yellow
    ================================================== -->
<section class="about-sec parallax-section" id="about">
    <div class="row">
        <div class="col-md-3">
            <h2>
                <small>Who We Are</small>
                About<br>
                Our Blog
            </h2>
        </div>
        <div class="col-md-4">
            <p>To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first
                Enlightenment, and all wisdom and virtue will naturally come to him.</p>
            <p>Saving our planet, lifting people out of poverty, advancing economic growth... these are one and the
                same fight. We must connect the dots between climate change, water scarcity, energy shortages,
                all.</p>
        </div>
        <div class="col-md-4">
            <p>Our greatest happiness does not depend on the condition of life in which chance has placed us, but is
                pursuits.</p>
            <p>Being in control of your life and having realistic expectations about your day-to-day challenges are
                healthy and rewarding life.</p>
            <p><a href="#" class="btn btn-transparent-white btn-capsul">Explore More</a></p>
        </div>
    </div>
</section>

{{--<!-- Footer================================================== -->--}}
<footer class="footer-4 txt-iron bg-almost-black hi-chateau-green">
    <div class="col-lg-12">
        <section class="action-sec">
            <div class="card-flipper effect__hover" data-id="1">
                <div class="card__back">
                    <div class="card card-01">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 dark_green-background">
                {{--<div class="container">--}}
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
                            <h3 class="text-center mb-5">Movie Card</h3>
                            <div class="card card-01 height-fix">
                                <img class="card-img-top"
                                     src="public\pic\5.jpg"
                                     alt="Card image cap">
                                <div class="card-img-overlay">
                                    <p class="card-text">Captain Jack Sparrow searches for the trident of
                                        Poseidon.</p>
                                    <p class="card-text"><a href="#" class="fa fa-bookmark-o"></a><a
                                                class="fa fa-heart-o" href="#"></a></p>
                                </div>
                            </div>
                            <div class="last">
                                <div class="combo lalign"><p>© ARIBAN. Design: khalilnaserinassb@gmail.com. Images: Unsplash.</p></div>
                                <div class="combo ralign social">
                                    <a href="#"> <i class="fa fa-facebook " aria-hidden="true"></i> </a>
                                    <a href="#"> <i class="fa fa-twitter " aria-hidden="true"></i> </a>
                                    <a href="#"> <i class="fa fa-linkedin " aria-hidden="true"></i> </a>
                                    <a href="#"> <i class="fa fa-pinterest-p " aria-hidden="true"></i> </a>
                                    <a href="#"> <i class="fa fa-vimeo " aria-hidden="true"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</footer>
</div>
<h5>khalilnaserinassab@gmail.com</h5>

{{--<script async defer src="dist/js/test.js" type="text/javascript"></script>--}}
{{--<script src="{{asset("dist/js/test-js.js")}}" type="text/javascript"></script>--}}
<script src="{{asset("dist/js/scroll-js.js")}}" type="text/javascript"></script>
<script src="{{asset("dist/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("dist/js/jquery.min.js")}}" type="text/javascript"></script>

</body>
</html>