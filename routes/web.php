<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/', 'CalculatorController@index');
// Route::post('/calculator', 'CalculatorController@calculate');

// Route::get('/welcome',function(){
//     return 'Chào mừng các bạn đến với PNV';
// });

// Route::get('/welcome',[App\http\Controllers\UserController::class,'xinchao']);

//  Tính tổng hai số 
// Route::get('/tong', [App\http\Controllers\TongController::class,'tinhTong']);
// Route::get('/tong', function(){
//     return view('tong');
// });
// Route::post('/tong', [App\http\Controllers\TongController::class,'tinhTong']);

// Route::get('/areaOfShape', function(){
//     return view('areaOfShape');
// });
// Route::post('/areaOfShape', [App\http\Controllers\areaOfShapController::class,'computeArea']);
// Validation 
// Route::get('/SignupRequest', [App\http\Controllers\SingupController::class,'index']);
// Route::post('/SignupRequest', [App\http\Controllers\SingupController::class,'displayInfor']);

// Route::get('SignupRequest',"SignupController@index");
// Route::get('SignupRequest',"SignupController@displayInfor");
Route::get('/', function(){
    return view('welcome');
});
// Thực hiện lệnh tạo bảng trong database
// Route::get('databse',function(){
//     Schema::create('loaisanpham',function($table){
//         $table->increments('id');
//         $table->string('ten',200);
//     });
//     echo "Đã thực hiện lệnh tạo bảng thành công";
// });
// Web sale
Route::get('homepage',[App\http\Controllers\PageController::class,'getIndex']);

Route::get('detail/{id}',[App\http\Controllers\PageController::class,'getDetail']);

Route::post('/themgiohang', [App\http\Controllers\PageController::class,'getAddCart'])->name('themgiohang');


