<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\SuKien;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getSukien()
    {
        $sukien = DB::table('sukien')
        ->leftJoin('ve', 'sukien.ID', '=', 've.SUKIEN_ID')
        ->select('sukien.ID','ve.GIAVE','sukien.ANH','sukien.NGAYBATDAU','sukien.THANHPHO','sukien.TENSK')
        ->get();
        
        return view('home', ['home' => $sukien]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function info()
    {
        return view('info');
    }
}
