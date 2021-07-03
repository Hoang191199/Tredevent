@extends('layouts.app')

@section('content')
<div class="container">
    <section class="background-e pdt-20">
         <div class="title_s text-center ">
            <ul>
                <li class="active_li">
                    <a href="" class="color-dark">Sắp diễn ra</a>
                </li>
                <li class="">|</li>
                <li class="">
                    <a href="" class="color-dark">Đang diễn ra</a>
                </li>
                <li class="">|</li>
                <li class="">
                    <a href="" class="color-dark">Mới Đăng</a>
                </li>
            </ul>
         </div>
    </section>
</div>
<div class="menu_event_cat text-center">	
    <ul>					
        <li class="active_li"><a class="color-dark" href="=">Tất cả</a></li>	
        <li class=""><a class="color-dark" href="">Hội thảo</a></li>		
        <li class=" "><a class="color-dark" href="">Khóa học</a></li>			
        <li class=""><a class="color-dark" href="">Triển lãm</a></li>			
        <li class=""><a class="color-dark" href="">Âm nhạc</a></li>			
        <li class=""><a class="color-dark" href="">Ăn uống</a></li>				
        <li class=""><a class="color-dark" href="">Miễn phí</a></li>				
        <li class=""><a class="color-dark" href="">Tuần này</a></li>				
    </ul>		
</div>
<div id="main" class="page-full-width sk-flex-display">
    <div class="wrap-schedule-list flex-col-right">
        <div class="navbar-main schedule-list">
        <style>
            #main {
                background: #efefef;
            }
            /* width */
            ::-webkit-scrollbar {
                width: 5px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #cecece;
            }
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

        </style>
        <div class="form-group container event_new">
            <div class="row">
                @foreach ($home as $value )
                <div class="col-md-3 pad-10">
                    <div class="item">
                        <div class="img_event">
                            <a href="thongtinsukien/{{ $value->ID }}">
                                <img src="/images/{{ $value->ANH }}" alt="" width="265px" height="150px">
                            </a>
                        </div>
                        <div class="info_event">
                            <div class="box_event">
                                <div class="name_ev">
                                    <a href="thongtinsukien/{{ $value->ID }}">
                                        <p class="event_name">{{ $value->TENSK }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event__date-time mt-10">
                            <div class="row row_ctm">
                                <div class="mobile-schedule-city col-md-7 col-sm-7  col-xs-7 col-sm-7 font-size-14">
                                    <div class="event__date-wrap">
                                        <i class="fa fa-calendar-check">
                                            <span>{{ $value->NGAYBATDAU }}</span>
                                        </i>
                                    </div>
                                </div>
                                <div class=" pdr-0 mobile-schedule-city col-md-5 col-sm-5 col-xs-5 col-sm-7 font-size-14 pdr-0 text-right">
                                    <span class="schedule-name name_sce text-center">{{ $value->THANHPHO }} </span>
                                </div>
                            </div>
                        </div>
                        <div class="row row_ctm">
                            <div class="mobile-schedule-city col-md-6 col-sm-6  col-xs-6 col-sm-6 font-size-12">
                                <i class="fa fa-clock font-size-15">19:30 - 23:30</i>
                            </div>
                        
                        <div class="mobile-schedule-city col-md-6 col-sm-6  col-xs-6 col-sm-6 font-size-14 pdr-0 text-right">
                            <span class="text-only-index font-weight-normal font-size-14 font-italic">Từ:</span>
                            <span class="price-events font-size-13 font-weight-bold">{{ $value->GIAVE }}</span>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>

@endsection