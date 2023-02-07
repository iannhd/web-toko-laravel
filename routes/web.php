<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
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
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');
Route::get('/success', [CartController::class, 'success'])->name('success');

Route::get('/register/success', [RegisterController::class, 'success'])->name('success');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard-products', [DashboardProductController::class, 'index'])->name('dashboard-products');

Route::get('/dashboard-products/create', [DashboardProductController::class, 'create'])->name('dashboard-products-create');

Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index'])->name('dashboard-transaction');
Route::get('/dashboard/settings', [DashboardSettingsController::class, 'store'])->name('dashboard-settings-store');
Route::get('/dashboard/account', [DashboardSettingsController::class, 'account'])->name('dashboard-settings-account');


// Route Admin
// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', App\Http\Controllers\Admin\CategoryController::class );
        Route::resource('user', App\Http\Controllers\Admin\UserController::class );
        Route::resource('product', App\Http\Controllers\Admin\ProductController::class );
        Route::resource('product-gallery', App\Http\Controllers\Admin\ProductGalleryController::class );
    });

// Route with params
Route::get('/dashboard-products/{id}',[DashboardProductController::class, 'details'])->name('dashboard-products-details');
Route::get('/dashboard-transactions/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transaction-details');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
