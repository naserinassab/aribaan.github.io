@extends('master')

@section('title')
    home
@endsection

@section('css')
    <link href="{{asset('dist\css\home.css')}}" media="all" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="col-md-12">
        <div class="col-md-12">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 color-fff">
                <h3>تغذیه,سلامتی و زیبایی</h3>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 color-fff">
                <h1>عسل آریبان</h1>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3">--}}
            <h1> فروش عسل </h1>
            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                lectus arcu.
            </p>
            <a class="More" href="shope">More</a>
            {{--</div>--}}
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3 ">--}}
            <h1> معرفی محصولات </h1>
            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                lectus arcu.
            </p>
            <a class="More" href="moarefi">More</a>
            {{--</div>--}}
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 color-fff">
            {{--<div class="box3">--}}
            <h1>خواص عسل</h1>
            <p>خواص عسل را بیشتر بشناسید:۳۱ خاصیت عسل
            </p>
            <a class="More" href="khavasasal">More</a>
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
                <div class="photo">
                    <img src="pic\7.jpg" width="100%" width="400 px" height="400 px">

                </div>
                <hr class="line">
            </div>
        </div>
        <div class="col-md-12">

        </div>
    </div>
@endsection