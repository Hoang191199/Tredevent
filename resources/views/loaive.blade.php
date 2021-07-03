@extends('layouts.app')
@section('content')
<div class="schedule-list-event row">
    <div class="col-md-10 col-sm-10 col-xs-6" style="padding-left:100px">
        <h3>Loại Vé</h3>
    </div>
    
    <div class="col-md-2 col-sm-2 col-xs-6 right-align mt-20">
        <a href="/taove/{{ $taove->SUKIEN_ID }}" class="btn btn-success">
            <i class="fa fa-plus"></i>
            Thêm vé
        </a>
    </div>
</div>
<div class="col-md-2 col-sm-2 col-xs-6">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên vé</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đã book</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($ve as $ticket)
                <tbody>
                    <tr>
                        <th>{{ $ticket->ID }}</th>
                        <td>{{ $ticket->TENVE }}</td>
                        <td>{{ $ticket->MOTA }}</td>
                        <td>{{ $ticket->GIAVE }}</td>
                        <td>{{ $ticket->SOLUONG }}</td>
                        <td></td>
                        <td>{{ $ticket->TRANGTHAI }}</td>
                        <td><a href="/capnhatloaive/{{ $ticket->ID }}"><span class="fa fa-edit"></span></a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>

                            

    @endsection
