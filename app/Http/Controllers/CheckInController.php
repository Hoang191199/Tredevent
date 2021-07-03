<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\SuKien;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function FindCustomers(Request $request, $id)
    {
        $select = $request->select;

        $Customer = SuKien::find($id);

        $Customers = DB::table('khachhang_ve')
            ->leftJoin('khachhang', 'khachhang_ve.ID_KHACHHANG', '=', 'khachhang.ID')
            ->leftJoin('ve', 'khachhang_ve.ID_VE', '=', 've.ID')
            ->select(
                'khachhang_ve.ID',
                'khachhang.MADON',
                'khachhang.HOTEN',
                'khachhang.SDT',
                'khachhang.EMAIL',
                'khachhang.TONGTIEN',
                've.GIAVE',
                've.TENVE',
                've.MAVE'
            )
            ->where('ve.SUKIEN_ID', $id);

        switch ($select) {
            case '1':
                $CheckinVe = $Customers
                    ->where('khachhang.HOTEN', $request->search)
                    ->get();
                break;
            case '2':
                $CheckinVe = $Customers
                    ->where('ve.MAVE', $request->search)
                    ->get();
                break;
            case '3':
                $CheckinVe = $Customers
                    ->where('khachhang.SDT', $request->search)
                    ->get();
                break;
            case '4':
                $CheckinVe = $Customers
                    ->where('khachhang.MADON', $request->search)
                    ->get();
                break;

            default:
                $CheckinVe = $Customers
                    ->get();
                break;
        }
        return view('checkin', ['checkin' => $Customer, 'CheckinVe' => $CheckinVe]);
    }
}
