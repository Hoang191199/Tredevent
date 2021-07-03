<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Khachhang;
use App\Ve;
use App\SuKien;

use Illuminate\Http\Request;

class DanhsachController extends Controller
{
    public function getList(Request $request)
    {

        $id = $request->masukien;

        $list = Khachhang::where('ID', $id)->get();

        $SearchEvent = SuKien::all();

        if(!$request->sukien){
            redirect('/');
        }

        $listCustomer = DB::table('khachhang_ve')
        ->leftJoin('khachhang', 'khachhang_ve.ID_KHACHHANG', '=', 'khachhang.ID')
        ->leftJoin('ve', 'khachhang_ve.ID_VE', '=', 've.ID')
        ->select(
            'khachhang_ve.ID',
            'khachhang.MADON',
            'khachhang.HOTEN',
            'khachhang.SDT',
            'khachhang.EMAIL',
            'khachhang.TONGTIEN',
            'khachhang.SLDAT',
            've.GIAVE',
        )
        ->where('ve.SUKIEN_ID', $id)
        ->get();

        return view('danhsachdangky', ['list' => $list,
                                        'listCustomer' => $listCustomer,
                                        'searchEvent' => $SearchEvent]);
    }

}

