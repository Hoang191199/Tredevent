@extends('layouts.app')
@section('content')
    <form id="form-add-event" action="{{ $loaive->ID }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="wrap-schedule-list flex-col-right">
            <div class="navbar-main schedule-list">
                <form id="form-add-ticket">
                    <div class="wrap-add-event">
                        <div class="ticket-info-content form-add-event">
                            <h1 class="add-event-heading">Cập nhật vé</h1>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group field-ticket-name required">
                                        <label class="control-label" for="ticket-name">Tên vé</label>
                                        <input type="text" id="ticket-name" class="form-control" name="tenve" 0=""
                                            aria-required="true" value="{{ $loaive->TENVE }}">
                                        @if ($errors->has('tenve'))
                                            <p class="errors">{{ $errors->first('tenve') }}</p>
                                        @endif
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group field-ticket-limits">
                                        <label class="control-label" for="ticket-limits">Số lượng <a href="#"
                                                title="Bằng 0 nếu không giới hạn số lượng">[?]</a></label>
                                        <input type="number" id="ticket-limits" class="form-control" name="soluong" min="0"
                                            value="{{ $loaive->SOLUONG }}">
                                        @if ($errors->has('soluong'))
                                            <p class="errors">{{ $errors->first('soluong') }}</p>
                                        @endif
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group field-ticket-price_origin required">
                                        <label class="control-label" for="ticket-price_origin">Giá vé gốc(vnđ)</label>
                                        <input type="number" id="ticket-price_origin" class="form-control" name="giave"
                                            min="0" aria-required="true" value="{{ $loaive->GIAVE }}">
                                        @if ($errors->has('loaive'))
                                            <p class="errors">{{ $errors->first('loaive') }}</p>
                                        @endif
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group field-ticket-status">
                                        <label class="control-label" for="ticket-status">Trạng thái vé</label>
                                        <select id="ticket-status" class="form-control select2-hidden-accessible"
                                            name="trangthai" tabindex="-1" aria-hidden="true">
                                            <option value="{{ $loaive->LOAIVE }}"></option>
                                            <option>Mở bán online</option>
                                            <option>Ngưng bán online</option>
                                            <option>Vé chưa mở bán</option>
                                            <option>Hết vé</option>
                                            <option>Liên hệ nhà tổ chức</option>
                                            <option>Ẩn trên web</option>
                                        </select>
                                        @if ($errors->has('trangthai'))
                                                <p class="errors">{{ $errors->first('trangthai') }}</p>
                                            @endif 
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group field-ticket-description required has-error">
                                <label class="control-label" for="ticket-description">Mô tả vé</label>
                                <textarea id="ticket-description" class="form-control" name="mota" rows="8"
                                    placeholder="Mô tả cho vé" aria-required="true"
                                    aria-invalid="true">{{ $loaive->MOTA }}</textarea>

                                {{-- <div class="help-block">Mô tả vé không được để trống.</div> --}}
                            </div>
                            <div class="wrap-event-submit">
                                <button type="submit" class="btn btn-success" name="save"><i class="fa fa-save"></i> Lưu
                                    lại</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endsection
