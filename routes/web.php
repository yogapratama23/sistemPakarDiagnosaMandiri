<?php

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
    return view('index');
});


Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/kontak', function () {
    return view('user.kontak');
});

Route::get('/diagnosa', function () {
    return view('user.diagnosa');
});


Route::group(['middleware' => ['auth', 'admin']], function(){

    Route::get('/admindashboard', function(){
        return view ('admin.admindashboard');
    });

    Route::get('/penyakit/create', [App\Http\Controllers\PenyakitsController::class, 'create']);
    Route::get('/penyakit', [App\Http\Controllers\PenyakitsController::class, 'index'])->name('penyakit.index');
    Route::post('/penyakit', [App\Http\Controllers\PenyakitsController::class, 'store']);
    Route::get('/penyakit/{penyakit}/edit', [App\Http\Controllers\PenyakitsController::class, 'edit'])->name('penyakit.edit');
    Route::PATCH('/penyakit/{penyakit}', [App\Http\Controllers\PenyakitsController::class, 'update'])->name('penyakit.update');
    Route::delete('/penyakit/{penyakit}', [App\Http\Controllers\PenyakitsController::class, 'destroy'])->name('penyakit.destroy');
    Route::get('/penyakit/{penyakit}', [App\Http\Controllers\PenyakitsController::class, 'show'])->name('penyakit.show');
    
    // Route::resource('penyakit', 'PenyakitsController');
    
    Route::get('/gejala', [App\Http\Controllers\GejalasController::class, 'index'])->name('gejala.index');
    Route::get('/gejala/create', [App\Http\Controllers\GejalasController::class, 'create'])->name('gejala.create');
    Route::post('/gejala', [App\Http\Controllers\GejalasController::class, 'store'])->name('gejala.create');
    Route::get('/gejala/{gejala}', [App\Http\Controllers\GejalasController::class, 'show'])->name('gejala.show');
    Route::get('/gejala/{gejala}/edit', [App\Http\Controllers\GejalasController::class, 'edit'])->name('gejala.edit');
    Route::PATCH('/gejala/{gejala}', [App\Http\Controllers\GejalasController::class, 'update'])->name('gejala.update');
    Route::delete('/gejala/{gejala}', [App\Http\Controllers\GejalasController::class, 'destroy'])->name('gejala.destroy');


    Route::get('/nilaicf', [App\Http\Controllers\NilaiCFSController::class, 'index'])->name('nilaicf.index');
    Route::get('/nilaicf/create', [App\Http\Controllers\NilaiCFSController::class, 'create'])->name('nilaicf.create');
    Route::post('/nilaicf', [App\Http\Controllers\NilaiCFSController::class, 'store'])->name('nilaicf.store');
    Route::get('/nilaicf/{nilaicf}', [App\Http\Controllers\NilaiCFSController::class, 'show'])->name('nilaicf.show');
    Route::get('/nilaicf/{nilaicf}/edit', [App\Http\Controllers\NilaiCFSController::class, 'edit'])->name('nilaicf.edit');
    Route::PATCH('/nilaicf/{nilaicf}', [App\Http\Controllers\NilaiCFSController::class, 'update'])->name('nilaicf.update');
    Route::delete('/nilaicf/{nilaicf}', [App\Http\Controllers\NilaiCFSController::class, 'destroy'])->name('nilaicf.destroy');

});

Auth::routes();

Route::get('/diagnosa', [App\Http\Controllers\UserController::class, 'diagnosa'])->name('diagnosa.form');
Route::POST('/diagnosa', [App\Http\Controllers\UserController::class, 'hasil'])->name('hasildiagnosa.hasil');
Route::get('/infopenyakit', [App\Http\Controllers\Usercontroller::class, 'infopenyakit'])->name('daftarpenyakit');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
