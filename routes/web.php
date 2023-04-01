<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('submit-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('submit-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard.home.main']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.home.main');
});

Route::post('/dashboard', function () {
    return view('dashboard.home.main');
});

Route::get('/pinjaman', function () {
    return view('dashboard.pinjaman.pinjam');
});
Route::get('/akun', function () {
    return view('dashboard.akun.data');
});

Route::post('/akun', function () {
    return view('dashboard.akun.data');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('main');
});

// Route::get('/haha', function () {
//     return view('tes');
// });




