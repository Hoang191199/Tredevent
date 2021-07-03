@extends('layouts.app')

    @section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <form  method="POST" action="info" enctype="multipart/form-data">
        @csrf
    <div class="container light-style flex-grow-1 container-p-y">
        
        <h4 class="font-weight-bold py-3 mb-4">
        Cập Nhật Hồ Sơ
        </h4>
        @if (session('success'))
            <div class="alert" role="alert">
            {{ session('success') }}
        @endif

        <div class="d-flex justify-content-md-center">
            <div class="col-md-8">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">

                <div class="card-body media align-items-center">
                    <input type="file" class="im" name="anh">
                    <img id="previewImg" src="/images/{{ Auth::user()->anh}}" style="width:150px;">

                    </div>
                </div>
                <hr class="border-light m-0">

                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Họ và Tên</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
                    </div>
                    {{-- <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
                    </div> --}}
                    <div class="form-group">
                        <label class="form-label">Số Điện Thoại</label>
                        <input type="text" class="form-control mb-1" value="{{ Auth::user()->sdt}}" name="sdt">
                        </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-1" name="email"value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-8">
                           <label for="myCity">Địa Chỉ</label>
                           <input type="text" class="form-control" name="diachi" placeholder="Số nhà, Đường, Quận, Thành Phố" value="{{ Auth::user()->diachi }}">
                        </div>
                        <div class="form-group col-sm-4">
                           <label for="gioitinh">Giới Tính</label>
                           <select name="gioitinh" class="form-control" value="{{ Auth::user()->gioitinh }}">
                              <option selected>Nam</option>
                              <option>Nữ</option>
                              <option>Khác</option>
                           </select>
                        </div>

                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="account-change-password">
                <div class="card-body pb-2">

                    <div class="form-group">
                        <label class="form-label">Mật Khẩu Cũ</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mật Khẩu Mới</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Xác Nhận Mật Khẩu</label>
                        <input type="password" class="form-control">
                    </div>

                </div>--}}
               
        <div class="text-left col-md-4">
            <button type="submit" name="save" class="btn btn-primary" >
                {{ __('Lưu lại') }}
            </button>&nbsp;
        <button type="submit" class="btn btn-light" name="cancel" ><a href="{{ route('home') }}" style="text-decoration: none; color:black">Cancel</a></button>
        </div>
        
    </div>

    @endsection