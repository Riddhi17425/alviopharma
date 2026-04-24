<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegistationController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\admin\MenuBannerController;
use App\Http\Controllers\admin\HomeMapController;
use App\Http\Controllers\admin\OurProductionController;
use App\Http\Controllers\admin\OurTeamController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MilestoneController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ClientelController;
use App\Http\Controllers\admin\KeyIngredientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\CaptchaController;

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

    //Front route
    Route::get('/', [dashboardController::class, 'index']);

    Route::get('manufacturing', [dashboardController::class, 'manufacturing'])->name('manufacturing');
    Route::get('contact', [dashboardController::class, 'contact'])->name('contact');
    Route::post('/inquiry-submit', [dashboardController::class, 'inquirystore'])->name('inquiry.submit');
    Route::get('blogs', [dashboardController::class,'blogs'])->name('blogs');
    Route::get('blogs/{url}', [dashboardController::class, 'blogsdetail'])->name('blogdetail');
    Route::get('board-directors', [dashboardController::class, 'boardDirectors'])->name('board.directors');
    Route::get('our-heritage', [dashboardController::class, 'ourHeritage'])->name('our.heritage');
    Route::get('our-company', [dashboardController::class, 'ourCompany'])->name('our.company');
    Route::get('sustainability', [dashboardController::class, 'sustainability'])->name('sustainability');
    Route::get('therapeutic-area', [dashboardController::class, 'therapeuticArea'])->name('therapeutic.area');

    Route::get('products', [dashboardController::class,'productlist'])->name('product');
    Route::get('products-details/{url}', [dashboardController::class,'productdetail'])->name('product.detail');
    

    Route::get('/captcha-image', [CaptchaController::class, 'image'])->name('captcha.image');  
    Route::get('/thank-you', [dashboardController::class, 'thankyou'])->name('thank-you');

    Route::get('login', [dashboardController::class, 'login'])->name('login');
    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/user', [usersController::class, 'user'])->name('user');
        Route::get('/admin/dashboard',[dashboardController::class, 'admin'])->name('/admin/dashboard');
        Route::get('/superAdmin', [superAdminController::class, 'superAdmin'])->name('superAdmin');  

        Route::get('/admin/dashboard', [adminController::class, 'admin'])->name('admin/dashboard');
        Route::resource('menubanner', MenuBannerController::class);
        Route::resource('homemap', HomeMapController::class);
        Route::resource('ourproduction', OurProductionController::class);
        Route::resource('ourteam', OurTeamController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('milestone', MilestoneController::class);
        Route::resource('brand', BrandController::class);
        Route::resource('clientel', ClientelController::class);
        Route::resource('keyingredient', KeyIngredientController::class)->except(['show']);
        Route::resource('product', ProductController::class);
        Route::prefix('backend')->group(function () {
            // Route::get('home', [adminController::class, 'index'])->name('home');
        });
    });