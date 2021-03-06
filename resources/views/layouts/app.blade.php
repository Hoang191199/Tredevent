<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/showimage.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sukien.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thongke.css') }}">
    
    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Sukien.net
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Search -->
                <div class="header__search col-lg-6 col-md-6 col-xs-9 full-xs display-flex-center">
                    <div class="search-box">
                        <form action="/timkiem" method="GET" class="display-flex-center mobile-table">
                            <div class="search__keyword">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Nh???p t??n s??? ki???n..." style="font-family:Arial, FontAwesome">
                            </div>
                            <div class="seatch__place secondary_color_text">
                                <div class="dropdown">
                                    <button class=" dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ch???n ?????a ??i???m
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">H?? N???i</a>
                                        <a class="dropdown-item" href="#">TP HCM</a>
                                        <a class="dropdown-item" href="#">Kh??c</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="margin-left: 20px">
                                        Ch???n th??? lo???i
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">H???i th???o</a>
                                        <a class="dropdown-item" href="#">Kh??a h???c</a>
                                        <a class="dropdown-item" href="#">Tri???n L??m</a>
                                        <a class="dropdown-item" href="#">Live Show</a>
                                        <a class="dropdown-item" href="#">S??? ki???n</a>
                                        <a class="dropdown-item" href="#">Kh??c</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-10"></div>
                        </form>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('????ng nh???p') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('????ng k??') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))

                                <a class="btn btn_new_ev ml-10" href="{{ route('login') }}">
                                    <i class="fa fa-plus-circle" aria-hidden="true">T???o s??? ki???n</i>
                                </a>
                            @endif

                        @else

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sukiencuatoi') }}"
                                        style="border: none; border-radius:30px ; background-color: #f5673b;">{{ __('S??? ki???n c???a t??i') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))

                                <a class="newBtn" href="{{ route('sukien') }}" title="Th??m s??? ki???n">
                                    <i class="fas fa-plus them"></i>
                                </a>

                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('info') }}">
                                        {{ __('H??? s??') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                        {{ __('Tho??t') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">

                                        @csrf
                                    </form>


                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div id="foodter">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="g-cell text--info-footer">
                            <img src="images/logo_2.png" alt="M???ng chia s??? s??? ki???n" style="width:100px;">
                            <h4>M???NG CHIA S??? S??? KI???N</h4>
                            <p>247 C???u Gi???y, H?? N???i</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="g-cell">
                            <h4>Li??n h???</h4>
                            <div class="g-cell">
                                <ul class="text-primary text--info-footer" style="line-height: 2;">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> 0904840440</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> cskh@sukien.net</li>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> 8h00 - 22h00 h??ng ng??y</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="g-cell">
                            <h4>Danh m???c</h4>
                            <div class="g-cell">
                                <ul class="text--info-footer" style="line-height: 2;">
                                    <li><a href="https://sukien.net/gioi-thieu.html">Gi???i thi???u</a></li>
                                    <li><a href="/blog/dieu-khoan-su-dung">??i???u kho???n d???ch v???</a></li>
                                    <li><a href="/price">B???ng gi??</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="g-cell">
                            <a rel="nofolow" class="icon-fb" target="_blank"
                                href="https://www.facebook.com/fan.sukien.net/" style="display: inline-block;"></a>
                            <a rel="nofolow" class="icon-youtube" target="_blank"
                                href="https://www.youtube.com/channel/UCLn1htxORgZyVXh_Ag0f1tQ"
                                style="margin-top: 3px;display: inline-block;padding-bottom: 2px;"></a>
                            <br>
                            <a href="https://sukien.net/gioi-thieu.html"
                                style="width:175px !important;height: 40px;padding: 0px 11px;width: 69%;margin: 0px 0px;position: relative;margin-top: 5px;background:transparent;border:1px solid #e6d664 !important;"
                                class="btn btn-secondary sedary ">
                                <span>
                                    <img style="width: 25px;position: absolute;top: 9px;left: 7px;"
                                        src="/images/1123.png">
                                </span>
                                <span class="buy-ticket"
                                    style="color: #e6d664;font-weight: bold;padding-left: 24px;">H???P T??C B??N V??</span>
                            </a>
                            <p style="margin-top:10px;"><a href="/affiliate">Affiliate</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <p>?? C??ng ty c??? ph???n h???c vi???n iNET - ??KKD: 0102635834 - M???ng chia s??? S??? ki???n mi???n ph??</p>
                </div>
                <div class="col-md-2">
                    <a rel="nofolow" href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=22168" target="_blank">
                        <img class="gov_mobile" alt="" title="" src="/gov.png" width="100px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('noidungsk');
    </script>
</body>

</html>
