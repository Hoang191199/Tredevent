<?php

namespace App\Http\Controllers;

use App\Khachhang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThongkeController extends Controller
{
    public function getStatistics()
    {
        $Statistics = DB::table('khachhang')
            ->selectRaw('count(*) as total')
            ->first();  
        return view('thongke', ['Statistics' => $Statistics]);
    }
}
