<?php

namespace App\Http\Controllers;
use App\Khachhang;
use App\SuKien;
use App\Ve;
use Illuminate\Http\Request;

class ThongtinKhachhangController extends Controller
{
    public function FindCustomer($id)
    {
        $Customer = SuKien::find($id);
        $Customer1 = Ve::where('SUKIEN_ID', $id)->get();

        return view('thongtinkhachhang', [
        'khachhang' => $Customer,
        've'=> $Customer1]);
    }


    public function Customer(Request $request)
    {
        $Customer = new Khachhang;
        if($Customer){
            $Customer->HOTEN = $request['hoten'];
            $Customer->SDT = $request['sdt'];
            $Customer->EMAIL = $request['email'];
            $Customer->SLDAT = $request['soluong'];
            $Customer->TONGTIEN= $request['soluong']*$request['giave'];
            $Customer->save();
        };
        return redirect()->back()->with('success','Đặt vé thành công');
    }
}
