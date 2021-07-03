@extends('layouts.app')

@section('content')
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
            <div class="wrap-schedule-list">
                <h1 class="ticket-uppercase center-align">Sự Kiện Của Tôi</h1>
            </div>
            <div class="form-group container event_new">
                <div class="row">
                    <div class="col-md-3 pad-10">
                        <a href="{{ route('sukien') }}">
                            <div class="item first">
                                <i class="fa fa-plus-circle"></i>
                                <p class="add_event_text">Tạo Sự Kiện</p>
                            </div>
                        </a>
                    </div>
                    @foreach ($sukien as $value )
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
                                        <a href="">
                                            <p class="event_name">{{ $value->TENSK }}</p>
                                        </a>
                                    </div>
                                </div>
                                <p style="">
                                    <a href="capnhatsukien/{{ $value->ID }}" title="Chỉnh sửa" class="item_ev">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="danhsachdangky?masukien={{ $value->ID }}" title="Danh sách đăng ký" class="item_ev">
                                        <i class="fa fa-server" aria-hidden="true"></i>
                                    </a>
                                    <a href="" title="Lịch" class="item_ev">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    <a href="loaive/{{ $value->ID }}" title="Loại vé" class="item_ev">
                                        <i class="fa fa-ticket"></i>
                                    </a>
                                    <a href="" title="Cài đặt" class="item_ev">
                                        <i class="fa fa-cog" ></i>
                                    </a>
                                </p>
                                <p style="display: flex;justify-content: center;">
                                    <a href="checkin/{{ $value->ID }}" title="Check in" class="btn btn-default" style="width: 94%;">
                                        <i class="fa fa-qrcode">CHECK IN</i>
                                    </a>
                                </p>
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
