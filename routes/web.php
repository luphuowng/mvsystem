<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieTypeController;
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
    return view('admin.index');
});

//Quản trị
Route::prefix('quan-tri')->group(function () {
    //Loại phim
    Route::prefix('loai-phim')->group(function () {
        Route::get('/', [MovieTypeController::class, 'index'])->name('movie-type.index');
        Route::get('/them-moi', [MovieTypeController::class, 'create'])->name('movie-type.add');
        Route::post('xu-ly-them', [MovieTypeController::class, 'store'])->name('movie-type.store');
        Route::get('/chinh-sua/{id}', [MovieTypeController::class, 'edit'])->name('movie-type.edit');
        Route::post('/xu-ly-sua/{id}', [MovieTypeController::class, 'update'])->name('movie-type.update');
        Route::get('/xoa/{id}', [MovieTypeController::class, 'destroy'])->name('movie-type.destroy');
    });
});

