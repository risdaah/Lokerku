<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\SewaLokerController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DataLokerAdminController;
use App\Http\Controllers\RiwayatSewaAdminController;


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






/* Route Di Dalam Auth */

Route::get('/HomepageUser', function () {return view('HomepageUser');});
Route::get('/HomepageAdmin', function () {return view('HomepageAdmin');});
Route::get('/HomepageMaster', function () {return view('HomepageMaster');});
Route::get('/LogoutUser', [LoginUserController::class, 'logoutuser'])->name('logoutuser');
Route::get('/ProfilUser', function () {return view('ProfilUser');});

Route::get('/ListLoker', function () {return view('ListLoker');});



Route::post('/sewaloker',[SewaLokerController::class, 'sewaloker'])->name('sewaloker');
Route::post('/kembalikan',[SewaLokerController::class, 'kembalikan'])->name('kembalikan');
Route::post('/editbaru',[PenggunaController::class, 'editbaru'])->name('editbaru');
Route::get('/DetailSewaLoker/{id}', [SewaLokerController::class, 'detail']);
Route::get('/LokerYangDipinjam/{id}', [SewaLokerController::class, 'kembali']);

/* Routes Admin */
Route::get('/RiwayatSewaLoker', function () {return view('RiwayatSewaLoker');});
Route::get('/ProfilAdmin', function () {return view('ProfilAdmin');});

Route::post('/editbaruadmin',[AdminController::class, 'editbaruadmin'])->name('editbaruadmin');

Route::get('/DataLoker', [DataLokerAdminController::class, 'tampilsemualoker'])->name('tampilsemualoker');
Route::get('/UpdateStatusLokerAdmin/{id}/updatestatusloker', [DataLokerAdminController::class, 'updatestatusloker'])->name('updatestatusloker');
Route::get('/TambahDataLoker', function () {return view('TambahDataLoker');});
Route::post('/tambahloker',[DataLokerAdminController::class, 'tambahloker'])->name('tambahloker');

Route::get('/ListLoker', [SewaLokerController::class, 'tampilsemualokersewa'])->name('tampilsemualokersewa');
Route::get('/RiwayatSewaLoker', [RiwayatSewaAdminController::class, 'tampilriwayat'])->name('tampilriwayat');





/* Route Diluar Auth */
Route::get('/',  function () {return view('LandingPage');});
Route::get('/PilihanLogin', function () {return view('PilihanLogin');});
Route::get('/LoginUser', function () {return view('LoginUser');});
Route::post('/loginprosesuser',[LoginUserController::class, 'loginprosesuser'])->name('loginprosesuser');

/* Lupa Password User */
Route::get('/LupaPasswordUser', function () {return view('LupaPassword');});
Route::post('/lupapassword',[LoginUserController::class, 'lupapassword'])->name('lupapassword');
Route::post('/rubahpassworduser',[LoginUserController::class, 'rubahpassworduser'])->name('rubahpassworduser');


Route::get('/LoginAdmin', function () {return view('LoginAdmin');});
Route::post('/loginprosesadmin',[LoginAdminController::class, 'loginprosesadmin'])->name('loginprosesadmin');
Route::get('/logoutAdmin',[LoginAdminController::class, 'logoutadmin'])->name('logoutadmin');

Route::get('/RegisterUser', function () {return view('RegisterUser');});
Route::post('/registeruser',[LoginUserController::class, 'registeruser'])->name('registeruser');

Route::post('/tambahadmin',[MasterController::class, 'tambahadmin'])->name('tambahadmin');