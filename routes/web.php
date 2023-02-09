<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\DashboardSettingsController;

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
// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories-detail');

Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/details/{id}', [DetailController::class, 'add'])->name('detail-add');

Route::post('/checkout/callback', [CartController::class, 'callback'])->name('midtrans-callback');

Route::get('/success', [CartController::class, 'success'])->name('success');

Route::get('/register/success', [RegisterController::class, 'success'])->name('success');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');

    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout');

    Route::get('/dashboard-products', [DashboardProductController::class, 'index'])->name('dashboard-products');
    Route::get('/dashboard-products/create', [DashboardProductController::class, 'create'])->name('dashboard-products-create');
    Route::get('/dashboard-products/{id}', [DashboardProductController::class, 'details'])->name('dashboard-products-details');
    Route::post('/dashboard-products', [DashboardProductController::class, 'store'])->name('dashboard-products-store');
    Route::post('/dashboard-products/{id}', [DashboardProductController::class, 'update'])->name('dashboard-products-update');
    Route::post('/dashboard-products/gallery/upload', [DashboardProductController::class, 'uploadGallery'])->name('dashboard-products-gallery-upload');
    Route::get('/dashboard-products/gallery/delete/{id}', [DashboardProductController::class, 'deleteGallery'])->name('dashboard-products-gallery-delete');

    Route::get('/dashboard-transactions', [DashboardTransactionController::class, 'index'])->name('dashboard-transaction');
    Route::get('/dashboard-transactions/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transactions-details');
    Route::post('/dashboard-transactions/{id}', [DashboardTransactionController::class, 'update'])->name('dashboard-transactions-update');


    Route::get('/dashboard/settings', [DashboardSettingsController::class, 'store'])->name('dashboard-settings-store');

    Route::get('/dashboard/account', [DashboardSettingsController::class, 'account'])->name('dashboard-settings-account');

    Route::post('/dashboard/account/{redirect}', [DashboardSettingsController::class, 'update'])->name('dashboard-settings-redirect');


});

// Route Admin
// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', App\Http\Controllers\Admin\CategoryController::class );
        Route::resource('user', App\Http\Controllers\Admin\UserController::class );
        Route::resource('product', App\Http\Controllers\Admin\ProductController::class );
        Route::resource('product-gallery', App\Http\Controllers\Admin\ProductGalleryController::class );
    });









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
