
<?php

use App\Http\Controllers\Uploadcontroller;
use Faker\Guesser\Name;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', "HomeController@GetSukien")->name('home');

Route::get('/info', 'HomeController@info')->name('info');
Route::post('info', 'Uploadcontroller@edit')->name('edit');
Route::post('info', 'Uploadcontroller@update')->name('update');

Route::post('sukien', 'SukienController@sukien')->name('sukien');

Route::get('sukiencuatoi', 'SukienController@getSukien')->name('sukiencuatoi');

Route::get('capnhatsukien/{id}', 'SukienController@GetEdit')->name('GetEdit');
Route::post('capnhatsukien/{id}', 'SukienController@PostEdit')->name('PostEdit');

Route::get('loaive/{id}', 'LoaiveController@getVe')->name('getVe');

Route::post('taove/{id}','LoaiveController@themve')->name('taove');
Route::get('taove/{id}','LoaiveController@CreateVe')->name('createVe');


Route::get('capnhatloaive/{id}','LoaiveController@FindVe')->name('FindVe');
Route::post('capnhatloaive/{id}', 'LoaiveController@PostVe')->name('PostVe');

Route::get('thongtinsukien/{id}', 'ThongtinSukien@InfoSukien')->name('thongtinsukien');

Route::get('thongtinkhachhang/{id}', 'ThongtinKhachhangController@FindCustomer');
Route::post('thongtinkhachhang','ThongtinKhachhangController@Customer')->name('Customer');

Route::get('checkin/{id}', 'CheckInController@FindCustomers')->name('FindCustomers');

Route::get('danhsachdangky', 'DanhsachController@getList')->name('danhsachdangky');

Route::get('thongke/{id}','ThongkeController@getStatistics')->name('thongke');

Route::get('sukien', function () {
    return view('sukien');
})->name('sukien');

Route::get('checkin', function () {
    return view('checkin');
})->name('checkin');





























