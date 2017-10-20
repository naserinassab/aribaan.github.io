@extends('master')

@section('title')
    home
@endsection

@section('css')
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">--}}
    {{--    <link href={{asset ("dist/css/test.css")}} rel="stylesheet" type="text/css">--}}
    {{--<link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css">--}}
@endsection

@section('content')
    {{--<div class="box">--}}
    <div class="col-md-12">
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3">--}}
            <h1> فروش عسل </h1>
            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                lectus arcu.
            </p>
            <a class="More" href="#">More</a>
            {{--</div>--}}
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3 ">--}}
            <h1> معرفی محصولات </h1>
            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                lectus arcu.
            </p>
            <a class="More" href="#">More</a>
            {{--</div>--}}
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3">--}}
            <h1>خواص عسل</h1>
            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                lectus arcu.
            </p>
            <a class="More" href="#">More</a>
            {{--</div>--}}
        </div>
    </div>
    {{--</div>--}}

    <div class="boxp">
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            <div class="title">
                <h1>موم</h1>
                <p>معرفی موم ها</p>
            </div>
            <div class="boxphoto">
                <img src="pic\1.jpg " alt="asal" width="200 px" height="200 px">
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            <h3>Magna</h3>
            <p>Cipdum dolor</p>
            <div class="boxphoto">
                <img src="pic\2.jpg" width="200 px" height="200 px">
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            <h3>Ipsum</h3>
            <p>Vestibulum comm</p>
        </div>
        <div class="boxphoto">
            <img src="pic\3.jpg" width="200 px" height="200 px">
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            <h3>Tempus</h3>
            <p>Fusce pellentes</p>
            <div class="boxphoto">
                <img src="pic\4.jpg" width="200 px" height="200 px">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-12">
        <h3>Dolore</h3>
        <p>Praesent placer</p>
    </div>
    <div class="col-md-12">
        <div class="box2p">
            <div class="title">
                <h1>معرفی زنبورها</h1>

            </div>
            <div class="pbox">
                <div class="photo">
                    <img src="pic\5.jpg" width="100%" width="400 px" height="400 px">

                    <h3>زنبور زیرکوهی</h3>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                        eu
                        erat.
                        Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
                    <a class="More" href="#">More</a>
                </div>

                <div class="photo">
                    <img src="pic\6.jpg" width="100%" width="400 px" height="400 px">

                    <h3>زنبور بالا کوهی</h3>
                    <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit.
                        Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
                    <a class="More" href="#">More</a>
                </div>
            </div>
            <hr class="line">
        </div>
    </div>
    <div class="col-md-12">
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
    </div>
@endsection