<?php

use App\Http\Controllers\Authenticate\LoginController;
use App\Http\Controllers\Backend as backend;
use App\Http\Controllers\FileStorageController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'site-setting', 'as' => 'site-setting.'], function () {
        Route::get('/{type}', [backend\SiteSettingController::class, 'index'])->name('index');
        Route::put('/{type}', [backend\SiteSettingController::class, 'onSave'])->name('onsave');
    });

    Route::group(['prefix' => 'partner', 'as' => 'partner.'], function () {
        Route::get('/', [backend\PartnerController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\PartnerController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\PartnerController::class, 'form'])->name('form');
        Route::post('/', [backend\PartnerController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\PartnerController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\PartnerController::class, 'onDelete'])->name('delete');
    });

    // Blog
    Route::group(['prefix' => 'blogs', 'as' => 'blogs.'], function () {
        Route::get('/', [backend\BlogController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\BlogController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\BlogController::class, 'form'])->name('form');
        Route::post('/', [backend\BlogController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\BlogController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\BlogController::class, 'onDelete'])->name('delete');
    });

    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', [backend\BannerController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\BannerController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\BannerController::class, 'form'])->name('form');
        Route::post('/', [backend\BannerController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\BannerController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\BannerController::class, 'onDelete'])->name('delete');
    });

    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/', [backend\SliderController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\SliderController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\SliderController::class, 'form'])->name('form');
        Route::post('/', [backend\SliderController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\SliderController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\SliderController::class, 'onDelete'])->name('delete');
    });

    // Product MANAGEMENT
    Route::group([
        'prefix' => 'products',
        'as' => 'product.'
    ], function () {
        Route::get('/', [backend\ProductController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\ProductController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\ProductController::class, 'form'])->name('form');
        Route::post('/', [backend\ProductController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\ProductController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\ProductController::class, 'onDelete'])->name('delete');
    });

    // Category MANAGEMENT
    Route::group([
        'prefix' => 'categories',
        'as' => 'category.'
    ], function () {
        Route::get('/', [backend\CategoryController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\CategoryController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\CategoryController::class, 'form'])->name('form');
        Route::post('/', [backend\CategoryController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\CategoryController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\CategoryController::class, 'onDelete'])->name('delete');
        Route::get('/dropdown', [backend\CategoryController::class, 'dropdown']);
    });
    // Brand MANAGEMENT
    Route::group([
        'prefix' => 'brands',
        'as' => 'brand.'
    ], function () {
        Route::get('/', [backend\BrandController::class, 'index'])->name('index');
        Route::get('/data-list', [backend\BrandController::class, 'dataList'])->name('list');
        Route::get('/form/{id?}', [backend\BrandController::class, 'form'])->name('form');
        Route::post('/', [backend\BrandController::class, 'onCreate'])->name('create');
        Route::patch('/{id}', [backend\BrandController::class, 'onUpdate'])->name('update');
        Route::delete('/{id}', [backend\BrandController::class, 'onDelete'])->name('delete');
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/', [backend\SettingController::class, 'index'])->name('index');
        Route::get('/team', [backend\SettingController::class, 'teamView'])->name('team');
        Route::get('/team/create', [backend\SettingController::class, 'create'])->name('create');
        Route::post('/team', [backend\SettingController::class, 'onSave'])->name('onsave');
        Route::get('/team/{id}', [backend\SettingController::class, 'update'])->name('update');
        Route::patch('/team/{id}', [backend\SettingController::class, 'onUpdate'])->name('onupdate');
        Route::delete('/team/{id}', [backend\SettingController::class, 'onDelete'])->name('ondelete');
        Route::patch('/team/security/{id}', [backend\SettingController::class, 'changePassword'])->name('changepassword');
        Route::patch('/update-profile', [Backend\SettingController::class, 'onUpdateProfile'])->name('update-profile');
        Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
            Route::get('/users', [backend\SettingController::class, 'getUserList'])->name('user-list');
        });
    });

    Route::get('traslate', function () {
        return redirect()->to("http://127.0.0.1:8000/admin/languages/en/translations?group=website");
    })->name('translate');

    // File Storage
    Route::group(['prefix' => 'file-upload'], function () {
        Route::post('/image/{dir}', [FileStorageController::class, 'uploadImage'])->name('image-upload');
        Route::delete('/image/{dir}', [FileStorageController::class, 'deleteImage'])->name('image-delete');
        Route::post('/editor-image/{dir}', [FileStorageController::class, 'uploadEditorImage'])->name('editor-image-upload');
        Route::get('/qr-code', [FileStorageController::class, 'generateQrCode'])->name('qr-code-generator');
    });

    Route::post('upload-content-file', [backend\TinymceController::class, 'uploadContent'])->name('uploadContent');
});
