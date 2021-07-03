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
    <link href="{{ URL::asset('css/customer.css') }}" rel="stylesheet">

    <title>Mạng chia sẻ sự kiện - Sukien.net</title>
</head>

<body>
    <div id="page" class="wrap-main">
        <div class="header heder_checkout">
            <div class="logo-checkout">
                <a href="{{ route('home') }}">
                    <img src="/images/logo_2.png" alt="" width="40px" class="display-inline-block">
                </a>
            </div>
            <h1 class="display-inline-block font-24" style="margin-bottom: 20px;">{{ $khachhang->TENSK }}</h1>
        </div>
        <header class="header sticky-main">
            <div class="header__main display-flex-center mobile-tabe">
                <div class="header__logo col-md-2 col-xs-3 full-xs text-left">
                    <div class="logo-box">
                    </div>
                </div>
                <div class=" col-md-7 col-xs-7 detail-content__nav hidden-sm hidden-xs affix-top">
                </div>
            </div>
        </header>
        <div class="main-container">
            <div class="container">
                <div class="wrap-site">
                    <form id="form-event-ticket" action="{{ route('Customer') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="site-content-contain booking-page background-f4">
                            <div class="bg-color-light">
                                <div id="step1" class="bg-color-light">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-pull-6">
                                            <h2 class="fz-20 text-center">THÔNG TIN KHÁCH HÀNG</h2>
                                            <div class="rows">
                                                @if (session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                <label class="control-labels Show" for="order-fullname">Họ tên</label>
                                                <input type="text" id="order-fullname" class="form-control"
                                                    placeholder="Họ tên của bạn *" name="hoten" required>
                                            </div>
                                            <div class="rows">
                                                <label class="control-labels Show" for="order-fullname">Số điện
                                                    thoại</label>
                                                <input type="number" id="order-fullname" class="form-control"
                                                    placeholder="Số điện thoại *" name="sdt" required>
                                            </div>
                                            <div class="rows">
                                                <label class="control-labels Show" for="order-fullname">Email nhận vé
                                                    điện tử</label>
                                                <input type="email" id="order-fullname" class="form-control"
                                                    placeholder="Email nhận vé điện tử *" name="email" required>
                                            </div>
                                            <div class="rows">
                                                <span class="bold">Đăng ký học tại</span>
                                                <select name="Order[Schedule_ID]" id="mail" class="form-control">
                                                    <option value="">Chọn lịch học</option>
                                                    <option value="3450">{{ $khachhang->THANHPHO }}
                                                        {{ $khachhang->NGAYBATDAU }}</option>
                                                </select>
                                            </div>
                                            <div class="rows">
                                                <button type="submit" id="popup-book-ticket"
                                                    class="h4 btn btn-main btn-medium full-width margin-0 text-uppercase font-weight-bold">ĐẶT
                                                    VÉ NGAY</button>
                                                <div class="mt-10 text-center fz-12">
                                                    (c) <a href="https://sukien.net">Sukien.net</a> – Mạng chia sẻ sự
                                                    kiện – Hotline: 0904 840 440
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-pull-6">
                                            <h2 class="fz-20 text-center">VUI LÒNG CHỌN VÉ</h2>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Loại vé</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá vé</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($ve as $value)

                                                        <tr>
                                                            <td data-title="Loại vé" class="ticket-type">
                                                                <h3
                                                                    class="font-size-14 font-weight-bold text-left ticket_title">
                                                                    {{ $value->TENVE }}</h3> <i
                                                                    style="font-size: 14px">{{ $value->MOTA }}</i>
                                                                <p class="font-size-12 color-68 font-italic display-flex"
                                                                    style="text-align: left"></p>
                                                            </td>
                                                            <!--SỐ LƯỢNG-->
                                                            <td data-title="Số lượng" class="ticket-qty"
                                                                style="width: 226px;padding-left: 30px;">
                                                                <label for="name"></label>
                                                                <button type="button"
                                                                    class="ticket-qty-input change_qty minus cursor_hover"
                                                                    name="ticket_number"> - </button>
                                                                <input type="text" id="ticket-quantity-not-free-2599"
                                                                    class="ticket-qty-input ticket-quantity-not-free  ticket-quantity"
                                                                    name="soluong" value="0" readonly="" min="0"
                                                                    max="30">
                                                                <button type="button"
                                                                    class="add change_qty plus cursor_hover">
                                                                    + </button>
                                                            </td>
                                                            <!--GIÁ VÉ-->
                                                            <td id="ticket_2599" data-title="Giá vé"
                                                                class="ticket-amount font-weight-bold color-dark">
                                                                <input id="book-ticket-price-discount-2599"
                                                                    class="hide-discount ticket-price block right-align" name="giave" value=" {{$value->GIAVE }}" style="text-align: center">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <!--TỔNG TIỀN-->
                                                    <tr>
                                                        <td colspan="2"
                                                            class="color-dark font-weight-bold total-hide text-uppercase">
                                                            <span style="float: right">Tổng tiền</span>
                                                        </td>
                                                        <td class="font-size-18 primary_color font-weight-bold"
                                                            data-title="Tổng tiền">

                                                            <span class="ticket-price-total"
                                                                id="ticket-price-total-discount">

                                                                <span class="bold" id="total-price-order" data-price="0"
                                                                    data-qty="1">
                                                                    0đ </span>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        //    Tính tiền
        var decrement = document.getElementsByClassName('minus');
        var increment = document.getElementsByClassName('plus');

        for (var i = 0; i < increment.length; i++) {
            var button = increment[i];
            button.addEventListener('click', function(event) {
                var buttonClick = event.target;
                var input = buttonClick.parentElement.children[2];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
            })
        }

        for (var i = 0; i < decrement.length; i++) {
            var button = decrement[i];
            button.addEventListener('click', function(event) {
                var buttonClick = event.target;
                var input = buttonClick.parentElement.children[2];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) - 1;

                if (newValue >= 0) {
                    input.value = newValue;
                } else {
                    input.value = 0;
                }
            })
        }

    </script>


    <script>
        CKEDITOR.replace('editor1');

    </script>
</body>

</html>
