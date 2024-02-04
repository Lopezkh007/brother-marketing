<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authenticate\LoginController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\HomepageController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\CertificateController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogDetailController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ProductOneController;
use App\Http\Controllers\frontend\ProductDetailController;
use App\Http\Controllers\frontend\ServicesController;

// use App\Http\Controllers\Frontend as Frontend;

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
use Illuminate\Support\Facades\Artisan;

Route::get('/config', function () {
    Artisan::call('optimize:clear');
});
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/camgo_login', [LoginController::class, 'login'])->name('camgo_login');
Route::post('/camgo_login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/send-email', [PageController::class, 'sendEmail'])->name('send-email');
Route::get("/",[HomeController::class, 'index'])->name("home");
Route::get("/quick/{id}",[HomeController::class, 'quick'])->name("quick");
Route::get("about",[AboutController::class, 'index'])->name("about");
Route::get("blogDetail",[BlogDetailController::class, 'index'])->name("blogdetail");
Route::get("contact",[ContactController::class, 'index'])->name("contact");
Route::get("news",[NewsController::class, 'index'])->name("news");
Route::get("product",[ProductOneController::class, 'index'])->name("product");
Route::get("productDetail/{id}",[ProductDetailController::class, 'index'])->name("productdetail");
Route::get("services",[ServicesController::class, 'index'])->name("services");
