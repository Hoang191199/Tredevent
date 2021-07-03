<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SuKien;
use App\Ve;


class SukienController extends Controller
{   
    public function getSukien()
    {
        $sukien = SuKien::all();
        return view('sukiencuatoi', ['sukien' => $sukien]);
    }

    public function sukien(Request $request)
    {   
        $sukien = $request->validate(
            [
                'tensk' => 'required|max:40|min:3',
                'anh' => 'required',
                'chude' => 'required',
                'thanhpho' => 'required',
                'diachi' => 'required|min:6',
                'thanhpho' => 'required',
                'ngaybatdau' => 'required',
                'ngayketthuc' => 'required',
                'tenve' => 'required|max:20|min:3',
                'soluong' => 'required',
                'giave' => 'required',
                'seotieude' => 'required',
                'seotukhoa' => 'required'
            ],
            [
                'tensk.max' => 'Tên sự kiện có độ dài từ 3 đến 20 ký tự',
                'tensk.min' => 'Tên sự kiện có độ dài từ 3 đến 20 ký tự',
                'tensk.required' => 'Vui lòng nhập tên sự kiện',
                'chude.required' => 'Vui lòng chọn chủ đề sự kiện',
                'anh.required' => 'Vui lòng chọn ảnh  sự kiện',
                'thanhpho.required' => 'Vui lòng chọn thành phố diễn ra sự kiện',
                'diachi.required' => 'Vui lòng nhập địa chỉ diễn ra sự kiện',
                'diachi.min' => 'Vui lòng điền đúng địa chỉ',
                'ngaybatdau.required' => 'Vui lòng chọn ngày bắt đầu',
                'ngayketthuc.required' => 'Vui lòng chọn ngày kết thúc',
                'tenve.required' => 'Vui lòng nhập vé',
                'giave.required' => 'Vui lòng nhập giá vé',
                'soluong.required' => 'Vui lòng nhập số  lượng vé',
                'seotieude.required' => 'Vui lòng nhập tiêu đề SEO ',
                'seotukhoa.required' => 'Vui lòng nhập từ khóa SEO'
            ]
        );

        $sukien = new SuKien();
        $ve = new Ve();
        if ($request->hasFile('anh')) {
            $fileimg = $request->anh->getClientOriginalName();
            $request->anh->move('images', $fileimg);
            if ($sukien) {
                $sukien->TENSK = $request['tensk'];
                $sukien->CHUDE = $request['chude'];
                $sukien->NHATOCHUC = $request['nhatochuc'];
                $sukien->NOIDUNGSK = $request['noidungsk'];
                $sukien->ANH = $fileimg;
                $sukien->THANHPHO = $request['thanhpho'];
                $sukien->DIACHI = $request['diachi'];
                $sukien->NGAYBATDAU = $request['ngaybatdau'];
                $sukien->NGAYKETTHUC = $request['ngayketthuc'];
                $sukien->SEO_tieude = $request['seotieude'];
                $sukien->SEO_mota = $request['seomota'];
                $sukien->SEO_tukhoa = $request['seotukhoa'];

                if($sukien->save()){
                    $ve->TENVE = $request['tenve'];
                    $ve->SOLUONG = $request['soluong'];
                    $ve->TRANGTHAI = $request['trangthai'];
                    $ve->GIAVE = $request['giave'];
                    $ve->MOTA = $request['mota'];
                    $ve->SUKIEN_ID = $sukien->id;
                    $ve->save();
                }
                return redirect()->back()->with('success', 'Thêm sự kiện thành công');
            }
        } else {
            return redirect()->back();
        }
    }
    public function GetEdit($id)
    {
        $EditEvent  = SuKien::find($id);
        return view('capnhatsukien', ['EditEvent' => $EditEvent]);
    }

    public function PostEdit(Request $request, $id)
    {   
        $EditEvent = $request->validate(
            [
                'tensk' => 'required|max:40|min:3',
                'anh' => 'required',
                'chude' => 'required',
                'thanhpho' => 'required',
                'diachi' => 'required|min:6',
                'thanhpho' => 'required',
                'seotieude' => 'required',
                'seotukhoa' => 'required'
            ],
            [
                'tensk.max' => 'Tên sự kiện có độ dài từ 3 đến 20 ký tự',
                'tensk.min' => 'Tên sự kiện có độ dài từ 3 đến 20 ký tự',
                'tensk.required' => 'Vui lòng nhập tên sự kiện',
                'chude.required' => 'Vui lòng chọn chủ đề sự kiện',
                'anh.required' => 'Vui lòng chọn ảnh  sự kiện',
                'thanhpho.required' => 'Vui lòng chọn thành phố diễn ra sự kiện',
                'diachi.required' => 'Vui lòng nhập địa chỉ diễn ra sự kiện',
                'seotieude.required' => 'Vui lòng nhập tiêu đề SEO ',
                'seotukhoa.required' => 'Vui lòng nhập từ khóa SEO'
            ]
        );

        $EditEvent = new SuKien();
        if ($request->hasFile('anh')) {
            $fileimg = $request->anh->getClientOriginalName();
            $request->anh->move('images', $fileimg);
            if ($EditEvent) {
                $EditEvent
                    ->where('ID', $id)
                    ->update([
                        'TENSK' => $request['tensk'],
                        'CHUDE' => $request['chude'],
                        'NHATOCHUC' => $request['nhatochuc'],
                        'THANHPHO' => $request['thanhpho'],
                        'DIACHI' => $request['diachi'],
                        'ANH' => $fileimg,
                        'SEO_tieude' => $request['seotieude'],
                        'SEO_mota' => $request['seomota'],
                        'SEO_tukhoa' => $request['seotukhoa']
                    ]);
                return redirect()->back()->with('success', 'Cập nhật sự kiện thành công');
            }
        }
    }
}
