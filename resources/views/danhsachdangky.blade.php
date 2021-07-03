@extends('layouts.app')
@section('content')
    <div class="wrap-schedule-list flex-col-right">
        <div class="navbar-main schedule-list">

            <div class=" wrap-order-list mt-20">
                <h1 class="order-list-heading center-align">
                    Danh sách đăng ký
                </h1>
            </div>

            <form action="{{ route('danhsachdangky') }}" method="get" class="form-inline" style="margin-left: 30%;"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only"></label>
                    <input class="form-control" type="date" name="ngaybatdau" value="" id="example-date-input">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input class="form-control" type="date" name="ngayketthuc" value="" id="example-date-input">
                </div>
                <select name="masukien" class="form-control select2-hidden-accessible mb-2" id="schedule-city_id">
                    @foreach ($searchEvent as $search)
                        <option value="{{ $search->ID }}">{{ $search->TENSK }}</option>
                    @endforeach
                </select>
                <div class="form-group row">
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            Lọc dữ liệu
                        </button>

                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <a class="btn btn-danger">Gọi xác nhận</a>
                    </div>
                </div>

                {{-- <div class="form-group-md-6 col-sm-2  col-xs-6">
                    <a href="" class="btn btn-success" style="margin-right: 15px">
                        <i class="fa fa-plus"></i>
                        Thêm vé
                    </a>
                    <a href="/thongke/{{ $search->ID }}" class="btn btn-success">
                        Thống kê
                    </a>
                </div> --}}
               
                    <div class="col-md-6 col-sm-10 col-xs-6" style="padding-left:100px">
                        <h3></h3>
                    </div>

                    <div class="form-group row" style="margin-left: 30px">
                        <div class="form-group mb-2">
                            <a href="/taove/{{ $search->ID }}" type="submit" class="btn btn-info">
                                <i class="fa fa-plus"></i>
                                Thêm vé
                            </a>
    
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <a href="/thongke/{{ $search->ID }}" class="btn btn-secondary">Thống kê</a>
                        </div>
                    </div>


            </form>

        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã đơn</th>
                    <th scope="col">Họ & tên</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Vé</th>
                    <th scope="col">Thu KH</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thanh Toán</th>
                </tr>
            </thead>
            @foreach ($listCustomer as $value)

                <tbody>
                    <tr>
                        <th scope="row">{{ $value->ID }}</th>
                        <td>{{ $value->MADON }}</td>
                        <td>{{ $value->HOTEN }}</td>
                        <td>{{ $value->SDT }}</td>
                        <td>{{ $value->SLDAT }}</td>
                        <td>{{ $value->TONGTIEN }}</td>
                        <td>Đã thanh toán</td>
                        <td>
                            <select name="" id="" class="form-control">
                                <option value="">Mới</option>
                                <option value="">Đang xử lý</option>
                                <option value="">Đã xác nhận</option>
                                <option value="">Đã tham dự</option>
                                <option value="">Đã hủy</option>
                                <option value="">Đã hoàn tiền</option>
                            </select>
                        </td>

                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>


@endsection
