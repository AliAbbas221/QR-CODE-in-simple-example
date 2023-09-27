<?php

//use BaconQrCode\Encoder\QrCode;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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
    return view('welcome');
});
Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});
Route::get('qrcodenew',function(){
return QrCode::color(10,0,0)->size(200)->backgroundColor(255,255,0)->generate('new colors');

});
