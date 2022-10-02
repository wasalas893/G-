<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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
// Cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
   
   return "Cache is cleared";
  });
  
// Mail
Route::get('/', [MainController::class, 'index']);
Route::get('/apartment/email', [MainController::class, 'apartment_email']);
Route::get('/retaile/email', [MainController::class, 'retaile_email']);
Route::get('/reply/email', [MainController::class, 'reply_email']);
Route::get('/reply/email/retail', [MainController::class, 'replyemail_retail']);


// form
Route::post('/apartment/register', [MainController::class, 'apartment_register'])->name('apartmet.register');
Route::post('/retail/register', [MainController::class, 'retail_register'])->name('retail.register');
