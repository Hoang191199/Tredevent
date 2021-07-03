<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="{{ URL::asset('css/thongtinsukien.css') }}" rel="stylesheet">
    <title>Mạng chia sẻ sự kiện - Sukien.net</title>
</head>

<body>
    <form action="{{ $Thongtin->ID }}" method="POST" enctype="multipart/form-data"></form>
    @csrf
    <div id="page" class="wrap-main">
        <div class="main-container">
            <!--?>-->
            <header class="header-detail header sticky-main header--sticky">
                <div class="header__main display-flex-center mobile-table">
                    <div class="header__logo col-md-2 col-xs-3 full-xs text-left">
                        <div class="logo-box">
                            <a href="/" style="text-decoration: none; font-size: 10px;" title="Trang Chủ">
                                <img src="/images/logo_2.png" width="60px" alt="Trang Chủ">
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-5 col-xs-5 detail-content__nav hidden-sm hidden-xs affix-top">
                        <ul>
                            <li class="">

                                <a href="" class="text-uppercase font-size-18 color-dark active" style="text-decoration: none;"
                                    style="overflow: hidden;text-overflow: ellipsis;te-space: nowrap; */">
                                    <h1 class="font-24" style=" text-decoration: none;">{{ $Thongtin->TENSK }}</h1>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__logo col-md-4 col-xs-4 full-xs text-left">
                        <a href="/thongtinkhachhang/{{ $Thongtin->ID }}" class="header-detail-booking btn  text-uppercase font-weight-bold"
                            style="padding-top: 12px; padding-bottom: 12px; padding-left: 80px;padding-right: 80px; margin-left: 15rem; font-size: 18px">
                            <i class="far fa-hand-point-right"></i>
                            Đặt vé ngay
                        </a>
                    </div>
                </div>
            </header>
            <!--<div class="wrap-site">-->
            <div class="wrap-site">

                <link href="/media/css/event_css.css?vs=0.34" rel="stylesheet">

                <section class="banner-page">
                    <img src="/images/{{ $Thongtin->ANH }}"
                        alt="SuKien" title="{{ $Thongtin->TENSK }}">
                </section>
                <section class="section_content">
                    <div class="main_content">
                        <div class="img_banner">
                            <img src="/images/{{ $Thongtin->ANH }}"
                                alt="Sukien" title="{{ $Thongtin->TENSK }}">
                            <div class="like_share">
                                <div class="like">
                                    <i class="fa fa-heart item_ls" aria-hidden="true"></i>
                                    <div class="background_layer"></div>
                                </div>
                                <div class="share">
                                    <i class="fa fa-share-alt item_ls" aria-hidden="true"></i>
                                    <div class="background_layer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="content__header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="bold ml-10 font-24" style="margin-top: 13px;"> {{ $Thongtin->TENSK }}</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-10 mb-10">

                                    <i class="fa fa-clock"></i>
                                    <span>
                                        <b>{{ $Thongtin->NGAYBATDAU }}</b>  8:00AM - 10:00PM </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-10 mb-10">
                                    <i class="fa fa-map-marker ml-2"></i>&nbsp;
                                    <span>
                                        <b>{{ $Thongtin->THANHPHO }}:</b> {{ $Thongtin->DIACHI }} </span>
                                </div>
                            </div>
                        </div>
                        
                        <div id="gioithieu">
                            {!! $Thongtin->NOIDUNGSK !!}
                        </div>
                        <div id="thongtinve"
                            class="display-flex mobile-table bg-color-light border-main detail-content__all mt-10 height_rezise"
                            style="height: 370px">
                            <div class="bold font-24">THÔNG TIN VÉ</div>
                            <script src="/embed/form.js?v=1"></script>
                            <iframe id="form_sukien_net" width="100%" height="100%" style="max-width:100%"
                                src="http://trendevent.net/embed/form/step1/16?color=333&amp;aff=&amp;coupon=&amp;src=http://cms.trendevent.net"
                                frameborder="0" scrolling="no" onload="resizeIframe(this); return false;"></iframe>
                        </div>

                    </div>
                </section>
                {{-- <section>
                    <div class="event_new">
                        <h3 class="bold text-center">Sự kiện sắp diễn ra</h3>
                        <div class="" style="display: flex;justify-content: center;">
                            <div class="">
                                <div class="">
                                    <!--ITEM-->
                                    <div class="item_event full-xs event__item">
                                        <div class="item_event full-xs event__item">
                                            <div class="row list_e">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                
            </div>
            <!--FOOTER-->
            <div id="foodter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="g-cell text--info-footer">
                                <img src="/media/images/logo.png" alt="Mạng chia sẻ sự kiện" style="width:250px;">
                                <h4>MẠNG CHIA SẺ SỰ KIỆN</h4>
                                <p>247 Cầu Giấy, Hà Nội</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="g-cell">
                                <h4>Liên hệ</h4>
                                <div class="g-cell">
                                    <ul class="text-primary text--info-footer" style="line-height: 2;">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 0904840440</li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> cskh@sukien.net</li>
                                        <li><i class="fa fa-clock" aria-hidden="true"></i> 8h00 - 22h00 hàng ngày</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="g-cell">
                                <h4>Danh mục</h4>
                                <div class="g-cell">
                                    <ul class="text--info-footer" style="line-height: 2;">
                                        <li><a href="https://sukien.net/gioi-thieu.html">Giới thiệu</a></li>
                                        <li><a href="/blog/dieu-khoan-su-dung">Điều khoản dịch vụ</a></li>
                                        <li><a href="/price">Bảng giá</a></li>
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
                                            src="/icon/huy-chuong.png">
                                    </span>
                                    <span class="buy-ticket"
                                        style="color: #e6d664;font-weight: bold;padding-left: 24px;">HỢP TÁC BÁN
                                        VÉ</span>
                                </a>
                                <p style="margin-top:10px;"><a href="/affiliate">Affiliate</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <!--/MAIN-CONTENT-->

        </div>
    </div>
</body>

</html>
