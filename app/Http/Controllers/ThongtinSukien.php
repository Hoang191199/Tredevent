<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuKien;

class ThongtinSukien extends Controller
{
    public function InfoSukien($id)
    {
        $InfoEvent  = SuKien::find($id);
        return view('thongtinsukien', ['Thongtin' => $InfoEvent]);
    }
}
