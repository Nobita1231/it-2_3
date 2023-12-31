<?php
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\catagoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//เมนู User
Route::get('admin/user/index',[UserController::class,'user']) ->name('u.index');
//เมนู Product
Route::get('admin/product/index',[productController::class,'product']) ->name('p.index');
//เมนู Catagory
Route::get('admin/catagory/index',[catagoryController::class,'catagory']) ->name('c.index');