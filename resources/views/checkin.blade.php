@extends('layouts.app')
@section('content')
    <div class="wrap-checkin container">
        <form action="/checkin/{{ $checkin->ID }}" method="GET">
            <h1 class="order-list-heading center-align bold  mt-20">Check In</h1>
            <div class="checkin-search-ticket" id="ajax-box-search">
                <p id="ajax-show-event-schedule">
                    <i class="fa fa-info-circle"></i>{{ $checkin->TENSK }}<br>
                    <i class="fa fa-map-marker"></i>{{ $checkin->THANHPHO }}, {{ $checkin->NGAYBATDAU }}/ <a href="{{ route('sukiencuatoi') }}">Chọn sự kiện khác</a>
                </p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <select id="inputState" class="form-control" name="select">
                        <option value="1">Tìm theo họ tên</option>
                        <option value="2">Tìm theo mã vé</option>
                        <option value="3">Tìm theo sđt</option>
                        <option value="4">Tìm theo mã đơn</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="search" id="" placeholder="Nhập thông tin tương ứng">
                </div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-success" name="search_1"><i class="fas fa-search"></i> Tìm kiếm</button>
                </div>
            </div>
            <table class="table table table-hover">
                <thead>
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">Mã đơn</th>
                    <th scope="col">Mã vé</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Loại vé</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col ">Check-in</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $CheckinVe as $value )       
                  <tr>
                    <th scope="row">{{ $value->ID }}</th>
                    <td>{{ $value->MADON }}</td>
                    <td>{{ $value->MAVE }}</td>
                    <td>{{ $value->HOTEN }}</td>
                    <td>{{ $value->SDT }}</td>
                    <td>{{ $value->TENVE }}</td>
                    <td>{{ $value->TONGTIEN }}</td>
                    <td>1</td>
                    <td><button >Check-In</button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </form>
    </div>


@endsection
