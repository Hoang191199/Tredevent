<?php


namespace App\Http\Controllers;;

use Illuminate\Http\Request;
use App\Ve;

class LoaiveController extends Controller
{
    public function getVe(Request $request, $id)
    {
        //    $this->validate($request,[
        //         'tenve'=>'required|max:20|min:3',
        //         'soluong'=>'required|min:1',
        //         'giave'=>'required|min:50000',
        //         'trangthai'=>'required'
        //    ],[
        //         'tenve.max'=>'Tên vé có độ dài từ 3 đến 20 ký tự',
        //         'tenve.min'=>'Tên vé có độ dài từ 3 đến 20 ký tự',
        //         'tenve.required'=>'Vui lòng nhập tên vé',
        //         'soluong.required'=>'Vui lòng nhập số lượng vé',
        //         'giave.required'=>'Vui lòng nhập giá vé',
        //         'giave.min'=>'Giá vé tối thiểu 500000đ',
        //         'trangthai.required'=>'Vui lòng chọn trạng thái vé'
        //    ]
        // );

        $loaive = Ve::where('SUKIEN_ID', $id)->get();
        $loaive1 = Ve::where('SUKIEN_ID', $id)->first();


        return view('loaive', [
            've' => $loaive,
            'taove' => $loaive1
        ]);
    }

    public function CreateVe($id)
    {
        $CreateVe = Ve::where('SUKIEN_ID', $id)->first();
        return view('taove', [
            'createVe' => $CreateVe
        ]);
    }

    public function themve(Request $request, $id)
    {
        $loaive = $request->validate(
            [
                'tenve' => 'required|max:20|min:3',
                'soluong' => 'required|min:1',
                'giave' => 'required',
                'trangthai' => 'required'
            ],
            [
                'tenve.max' => 'Tên vé có độ dài từ 3 đến 20 ký tự',
                'tenve.min' => 'Tên vé có độ dài từ 3 đến 20 ký tự',
                'tenve.required' => 'Vui lòng nhập tên vé',
                'soluong.required' => 'Vui lòng nhập số lượng vé',
                'giave.required' => 'Vui lòng nhập giá vé',
                'trangthai.required' => 'Vui lòng chọn trạng thái vé'
            ]
        );

        $loaive = new Ve();
        if ($loaive) {
            $loaive->TENVE = $request['tenve'];
            $loaive->SOLUONG = $request['soluong'];
            $loaive->TRANGTHAI = $request['trangthai'];
            $loaive->GIAVE = $request['giave'];
            $loaive->MOTA = $request['mota'];
            $loaive->SUKIEN_ID = $id;

            $loaive->save();
        }
        return redirect('loaive/' . $id)->with('success', 'Thêm vé thành công');
    }



    //Cập nhật vé!!!
    public function FindVe($id)
    {
        $loaive  = Ve::find($id);
        return view('capnhatloaive', ['loaive' => $loaive]);
    }
    public function PostVe(Request $request, $id)
    {
        $loaive = $request->validate(
            [
                'tenve' => 'required|max:20|min:3',
                'soluong' => 'required|min:1',
                'giave' => 'required',
                'trangthai' => 'required'
            ],
            [
                'tenve.max' => 'Tên vé có độ dài từ 3 đến 20 ký tự',
                'tenve.min' => 'Tên vé có độ dài từ 3 đến 20 ký tự',
                'tenve.required' => 'Vui lòng nhập tên vé',
                'soluong.required' => 'Vui lòng nhập số lượng vé',
                'giave.required' => 'Vui lòng nhập giá vé',
                'trangthai.required' => 'Vui lòng chọn trạng thái vé'
            ]
        );

        $loaive = new Ve();
        if ($loaive) {
            $loaive
                ->where('ID', $id)
                ->update([
                    'TENVE' => $request['tenve'],
                    'SOLUONG' => $request['soluong'],
                    'TRANGTHAI' => $request['trangthai'],
                    'GIAVE' => $request['giave'],
                    'MOTA' => $request['mota']
                ]);
            return redirect()->back()->with('success', 'Cập nhật vé thành công');
        }
    }
}
