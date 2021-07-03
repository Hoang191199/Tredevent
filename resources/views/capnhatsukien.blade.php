@extends('layouts.app')
@section('content')

    <div id="app" class="page-full-width sk-flex-display">
        <div class="wrap-schedule-list flex-col-right">
            <div class="navbar-main schedule-list">
                <form id="form-add-event" action="{{ $EditEvent->ID }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-add-event">
                        <div class="form-add-event container">
                            <h1 class="add-event-heading">Cập nhật sự kiện</h1>
                            <p class="add-event-heading">{{ $EditEvent->TENSK }}</p>
                            
                            <!--PHẦN THÔNG TIN SỰ KIỆN-->
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <div class="wrap-event-info">
                                <h2 class="event-info-text">
                                    <span class="event-info-order">1</span> Thông tin sự kiện
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-event-title">
                                            <label class="control-label" for="event-title">Tên sự kiện</label>
                                            <input type="text" id="event-title" class="form-control" name="tensk" value="{{ $EditEvent->TENSK }}" >
                                            @if ($errors->has('tensk'))
                                        <p class="errors">{{ $errors->first('tensk') }}</p>
                                    @endif 
                                        </div>
                                        <div class="form-group field-event-category_id required">
                                            <label class="control-label" for="event-category_id">Chọn chủ đề</label>
                                            <select id="event-category_id" class="form-control select2-hidden-accessible"
                                                name="chude" value="">
                                                <option value="">{{ $EditEvent->CHUDE }}</option>
                                                <option value="Hội Thảo">Hội Thảo</option>
                                                <option value="Khoá Học">Khoá Học</option>
                                                <option value="Triển Lãm">Triển Lãm</option>
                                                <option value="Live Show">Live Show</option>
                                                <option value="Sự Kiện">Sự Kiện</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                            @if ($errors->has('chude'))
                                        <p class="errors">{{ $errors->first('chude') }}</p>
                                    @endif 
                                        </div>
                                        <label class="control-label" for="event-category_id">Nhà Tổ chức</label>
                                        <select class="form-control " id="event-organizer_id" name="nhatochuc" >
                                            <option value="">{{ $EditEvent->NHATOCHUC }}</option>
                                            <option >Admin</option>
                                            <option >Khách Hàng</option>
                                        </select>
                                        <a href="/user/create-organizer" style="display: block; margin-bottom: 10px;">
                                            <i class="fa fa-plus"></i>
                                            Thêm đơn vị tổ chức mới
                                            <i class="fa fa-info-circle"
                                                title="Sau khi tạo xong hãy refesh trang để hệ thống nhận ra dữ liệu mới"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-event-picture-url-small has-success">
                                            <label class="control-label" for="event-picture-url-small">Ảnh đại diện
                                                (800x400)</label>
                                            <div class="file-input file-input-new">
                                                <div class="input-group file-caption-main">
                                                    <div class="file-caption-name" title=""></div>
                                                </div>
                                                <div class="">
                                                    <div>
                                                        <label for="event-picture-url-small" style="width:100%">
                                                            <div class="preview"
                                                                style="width:100%;height:200px; border:1px solid #d6d5d5;position: relative;cursor:pointer">
                                                                <img id="Picture_small_URL"
                                                                    style="width:100%;height:100%" src="/images/{{ $EditEvent->ANH }}" >
                                                                <i class="fa fa-image img-icon hide_icon"
                                                                    style="position: absolute;top: 48%;left: 50%;font-size: 40px;"></i>
                                                            </div>
                                                        </label>
                                                        <input type="file" style="display:none" id="event-picture-url-small"
                                                            class="anh" name="anh">
                                                    </div>
                                                    @if ($errors->has('anh'))
                                        <p class="errors">{{ $errors->first('anh') }}</p>
                                    @endif 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group field-schedule-city_id required">
                                            <label class="control-label" for="schedule-city_id">Chọn tỉnh/thành
                                                phố</label>
                                            <select class="form-control select2-hidden-accessible"
                                                id="schedule-city_id" name="thanhpho">
                                                <option value="{{ $EditEvent->THANHPHO }}">{{ $EditEvent->THANHPHO }}</option>
                                                <option value="Online">Online</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Cao Bằng">Đà Lạt</option>
                                                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                            </select>
                                            @if ($errors->has('thanhpho'))
                                        <p class="thanhpho">{{ $errors->first('seotukhoa') }}</p>
                                    @endif 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group field-schedule-address required has-error">
                                            <label class="control-label" for="schedule-address">Địa chỉ diễn ra sự
                                                kiện</label>
                                            <input type="text" id="schedule-address" class="form-control"
                                                name="diachi" value="{{$EditEvent->DIACHI }}" >
                                                @if ($errors->has('diachi'))
                                        <p class="errors">{{ $errors->first('diachi') }}</p>
                                    @endif 
                                        </div>
                                    </div>
                                </div>
                            <!--PHẦN MÔ TẢ SEO-->
                            <div class="wrap-event-seo">
                                <h2 class="event-info-text">
                                    <span class="event-info-order">2</span> Cài đặt SEO
                                </h2>
                                <div class="event-seo-content">
                                    <div class="form-group field-event-seo-title">
                                        <label class="control-label" for="event-seo-title">Tiêu đề</label>
                                        <input type="text" id="event-seo-title" class="form-control" name="seotieude"
                                            maxlength="100" placeholder="Mặc định tạo ra từ tên sự kiện nếu không nhập" value="{{ $EditEvent->SEO_tieude }}">
                                            @if ($errors->has('seotieude'))
                                            <p class="errors">{{ $errors->first('seotieude') }}</p>
                                        @endif 
                                        </div>
                                    <div class="form-group field-event-seo-description">
                                        <label class="control-label" for="event-seo-description">Mô tả</label>
                                        <textarea id="event-seo-description" class="form-control" name="seomota"
                                            maxlength="200" placeholder="" value="{{ $EditEvent->SEO_mota }}"></textarea>
                                    </div>
                                    <div class="form-group field-event-seo-title">
                                        <label class="control-label" for="event-seo-title">Từ khóa (các từ cách nhau bởi dấu
                                            phẩy ',' )</label>
                                        <input type="text" id="event-seo-title" class="form-control" name="seotukhoa" value="{{ $EditEvent->SEO_tukhoa }}">
                                        @if ($errors->has('seotukhoa'))
                                        <p class="errors">{{ $errors->first('seotukhoa') }}</p>
                                    @endif 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-event-submit">
                            <button type="submit" class="btn-event-submit btn btn-success">
                                <i class="far fa-save"></i>
                                Lưu
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
