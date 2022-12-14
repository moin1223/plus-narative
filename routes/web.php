<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['prefix'=>'/admin','middleware' => 'role:admin'], function(){
    Route::get('/users',[UserController::class,'index'])->name('user.index');
    Route::get('/user-create',[UserController::class,'create'])->name('user.create');
    Route::post('/user-store',[UserController::class,'store'])->name('user.store');

})->middleware(['auth', 'role:admin'])->name('admin.index');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
