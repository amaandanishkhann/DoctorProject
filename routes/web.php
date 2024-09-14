<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




    Route::middleware('guest')->group(function () {
        Route::get('/index', [HomeController::class, 'index'])->name('home.home');
        Route::get('abouts', [HomeController::class, 'abouts'])->name('home.abouts');
        Route::get('/services', [HomeController::class, 'services'])->name('home.services');
        Route::get('/images', [HomeController::class, 'images'])->name('home.images');
        Route::get('/videos', [HomeController::class, 'videos'])->name('home.videos');
        Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
        Route::post('/usercontacts', [HomeController::class, 'usercontacts'])->name('home.usercontacts');
        Route::get('/servicelist/{id}', [HomeController::class, 'servicelist'])->name('home.servicelist');

        Route::get('login', [AdminController::class, 'login'])->name('admin.login');
        Route::get('register', [AdminController::class, 'register'])->name('admin.register');
        Route::post('loginuser', [AdminController::class, 'loginuser'])->name('admin.loginuser');
        Route::post('registeruser', [AdminController::class, 'registeruser'])->name('admin.registeruser');
    });


    Route::prefix('admin')->group(function () {


        Route::middleware('auth')->group(function () {

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('user', [AdminController::class, 'user'])->name('admin.user');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('banner', [AdminController::class, 'banner'])->name('admin.banner');
        Route::post('addbanner', [AdminController::class, 'addbanner'])->name('admin.addbanner');
        Route::get('viewbanner', [AdminController::class, 'viewbanner'])->name('admin.viewbanner');
        Route::get('deletebanner/{id}', [AdminController::class, 'deletebanner'])->name('admin.deletebanner');
        Route::get('service', [AdminController::class, 'service'])->name('admin.service');
        Route::post('addservice', [AdminController::class, 'addservice'])->name('admin.addservice');
        Route::get('viewservices', [AdminController::class, 'viewservices'])->name('admin.viewservices');
        Route::get('editservices/{id}', [AdminController::class, 'editservices'])->name('admin.editservices');
        Route::post('upservice/{id}', [AdminController::class, 'upservice'])->name('admin.upservice');
        Route::get('deleteservice/{id}', [AdminController::class, 'deleteservice'])->name('admin.deleteservice');
        Route::get('about/{id}', [AdminController::class, 'about'])->name('admin.about');
        Route::post('addabout/{id}', [AdminController::class, 'addabout'])->name('admin.addabout');
        Route::get('image', [AdminController::class, 'image'])->name('admin.image');
        Route::post('addimage', [AdminController::class, 'addimage'])->name('admin.addimage');
        Route::get('viewimage', [AdminController::class, 'viewimage'])->name('admin.viewimage');
        Route::get('deleteimage/{id}', [AdminController::class, 'deleteimage'])->name('admin.deleteimage');
        Route::get('video', [AdminController::class, 'video'])->name('admin.video');
        Route::post('addvideo', [AdminController::class, 'addvideo'])->name('admin.addvideo');
        Route::get('viewvideo', [AdminController::class, 'viewvideo'])->name('admin.viewvideo');
        Route::get('deletevideo/{id}', [AdminController::class, 'deletevideo'])->name('admin.deletevideo');
    });
});

