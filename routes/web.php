<?php

use Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\YetuMiddleware;
use App\Http\Controllers\OmbaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YetuController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\pataoController;
use App\Http\Controllers\TwilioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Middleware\pataoMiddleware;
use App\Http\Controllers\PageDesignerController;





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
    return view('login');
});
Route::get('/register', [UserController::class, 'register'])->name('register');

// After registration, redirect to the login page
Route::post('/register', function () {
    return redirect()->route('login');
});
Route::post('/register',[UserController:: class, 'register']);

   
Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/products', [ProductController::class, 'index'])->middleware('productMiddleware');
Route::get('/products/{id}', [ProductController::class, 'detail'])
    ->name('product.detail')
    ->middleware('check.route.existence:product.detail');
    

    Route::get('/chart', [ChartController::class, 'index'])->name('chart');

   
    Route::match(['get', 'post'], '/requests', [RequestController::class, 'store'])->name('requests.store');
   

Route::get('/ombas', [OmbaController::class, 'index'])->name('ombas.index');
Route::post('/ombas', [OmbaController::class, 'store'])->name('ombas.store');



Route::get('sendSMS', [App\Http\Controllers\TwilioSMSController::class, 'index']);
// routes/web.php






Route::post('/yetu.index', [YetuController::class, 'store'])->name('yetu.index');
// routes/web.php



Route::get('/yetu', [YetuController::class, 'index']);

Route::get('/yetu/veiw/{id}', [YetuController::class, 'veiw'])->middleware(YetuMiddleware::class);

Route::get('/yetu/{id}/download-pdf', [YetuController::class, 'downloadPDF'])->name('yetu.downloadPDF');
Route::delete('/yetu/delete/{id}', [YetuController::class, 'delete'])->name('yetu.delete');
Route::get('/yetu/request-form', [YetuController::class, 'showRequestForm'])->middleware(YetuMiddleware::class);
Route::get('yetu/detail/{id}', [yetuController::class, 'detail'])
    ->name('yetu.detail')
    ->middleware('check.route.existence:yetu.detail');
    
    Route::get('/search', [YetuController::class, 'search'])->name('yetu.search');

    
    


Route::get('/patao', [PataoController::class, 'index'])->name('patao.index');
Route::post('/patao', [PataoController::class, 'store'])->name('patao.index');
Route::get('/patao/{id}/download-pdf', [pataoController::class, 'downloadPDF'])->name('patao.downloadPDF');

Route::get('/patao/veiw/{id}', [pataoController::class, 'veiw'])->middleware(pataoMiddleware::class);
Route::delete('/patao/delete/{id}', [pataoController::class, 'delete'])->name('patao.delete');
Route::get('/patao/request-form', [pataoController::class, 'showRequestForm'])->middleware(pataoMiddleware::class);
Route::get('patao/detail/{id}', [pataoController::class, 'detail'])
    ->name('patao.detail')
    ->middleware('check.route.existence:patao.detail');




Route::get('/page/{id}', [PageDesignerController::class, 'index'])->name('page-designer');







require __DIR__.'/auth.php';
