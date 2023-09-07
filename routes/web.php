<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\ProductsControllers;
use App\Http\Controllers\CommentsControllers;
use App\Http\Controllers\CartControllers;
use App\Http\Controllers\Admin\CategoriesControllers;
use App\Http\Controllers\Admin\ProductsControllers as AdminProductsControllers;
use App\Http\Controllers\Admin\ProfileControllers as AdminProfileControllers;
use App\Http\Controllers\Admin\BillsControllers as AdminBillsControllers;
use App\Http\Controllers\Admin\ImagesControllers;
use App\Http\Controllers\CheckoutControllers;
use App\Http\Controllers\BillsControllers;
use App\Http\Controllers\Delivery\ProfileControllers as DeliveryProfileControllers;
use App\Http\Controllers\Delivery\BillsControllers as DeliveryBillsControllers;

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

Route::get('/', [HomeControllers::class, 'index']);

Route::get('/san-pham', [ProductsControllers::class, 'allProducts']);

Route::get('/san-pham/{pro_id}', [ProductsControllers::class, 'detailProduct']);

Route::get('/danh-muc/{cate_id}', [ProductsControllers::class, 'proByCate']);

Route::get('/tim-kiem', [ProductsControllers::class, 'searchProduct']);

Route::post('/add-comment', [CommentsControllers::class, 'addComment']);

// Cart
Route::get('/gio-hang', [CartControllers::class, 'loadView']);
Route::post('/add-to-cart/{pro_id}', [CartControllers::class, 'addToCart']);
Route::patch('/update-cart', [CartControllers::class, 'updateCart'])->name('update.cart');
Route::delete('/remove-from-cart', [CartControllers::class, 'deleteProduct'])->name('remove.from.cart');

// Checkout
Route::get('/dat-hang', [CheckoutControllers::class, 'loadView']);
Route::post('/dat-hang', [CheckoutControllers::class, 'checkout']);

// Bills
Route::get('/lich-su', [BillsControllers::class, 'allBills']);
Route::get('/getBillDetails/{bill_id}', [BillsControllers::class, 'getOneBill']);

// Authenticate
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*------------------- Admin -------------------*/
Route::get('/admin', function () {
    return view('admin.homeAdmin');
})->middleware('auth', 'Admin');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminProfileControllers::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileControllers::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileControllers::class, 'destroy'])->name('admin.profile.destroy');
});

/*------------------- Categories list -------------------*/
Route::get('/admin/danh-muc', [CategoriesControllers::class, 'getAll']);

/*------------------- Add categories -------------------*/
Route::get('/admin/add-category', [CategoriesControllers::class, 'add']);
Route::post('/admin/add-category', [CategoriesControllers::class, 'addAction']);

/*------------------- Update categories -------------------*/
Route::get('/admin/update-category/{cate_id}', [CategoriesControllers::class, 'update']);
Route::post('/admin/update-category/{cate_id}', [CategoriesControllers::class, 'updateAction']);

/*------------------- Delete categories -------------------*/
Route::get('/admin/delete-category/{cate_id}', [CategoriesControllers::class, 'delete']);

/*------------------- Products list -------------------*/
Route::get('/admin/san-pham', [AdminProductsControllers::class, 'getAll']);

/*------------------- Add products -------------------*/
Route::get('/admin/add-product', [AdminProductsControllers::class, 'add']);
Route::post('/admin/add-product', [AdminProductsControllers::class, 'addAction']);

/*------------------- Update products -------------------*/
Route::get('/admin/update-product/{pro_id}', [AdminProductsControllers::class, 'update']);
Route::post('/admin/update-product/{pro_id}', [AdminProductsControllers::class, 'updateAction']);

/*------------------- Delete products -------------------*/
Route::get('/admin/delete-product/{pro_id}', [AdminProductsControllers::class, 'delete']);

/*------------------- Images list -------------------*/
Route::get('/admin/hinh-anh/{pro_id}', [ImagesControllers::class, 'getAll']);

/*------------------- Add images -------------------*/
Route::get('/admin/add-image/{pro_id}', [ImagesControllers::class, 'add']);
Route::post('/admin/add-image/{pro_id}', [ImagesControllers::class, 'addAction']);

/*------------------- Delete images -------------------*/
Route::get('/admin/delete-product/{pro_id}', [AdminProductsControllers::class, 'delete']);

/*------------------- List bills -------------------*/
Route::get('/admin/don-hang', [AdminBillsControllers::class, 'getAll']);
Route::get('/detailbill/{bill_id}', [AdminBillsControllers::class, 'getOneBill']);

/*------------------- Delivery -------------------*/
Route::get('/delivery', function () {
    return view('delivery.homeDelivery');
})->middleware('auth', 'Admin');
Route::get('/delivery', [DeliveryBillsControllers::class, 'getAll']);
Route::get('/delivery/detailbill/{bill_id}', [DeliveryBillsControllers::class, 'getOneBill']);

Route::middleware('auth')->group(function () {
    Route::get('/delivery/profile', [DeliveryProfileControllers::class, 'edit'])->name('delivery.profile.edit');
    Route::patch('/delivery/profile', [DeliveryProfileControllers::class, 'update'])->name('delivery.profile.update');
    Route::delete('/delivery/profile', [DeliveryProfileControllers::class, 'destroy'])->name('delivery.profile.destroy');
});

/*------------------- Update bills -------------------*/
Route::get('/delivery/updatebill/{bill_id}', [DeliveryBillsControllers::class, 'update']);
Route::post('/delivery/updatebill/{bill_id}', [DeliveryBillsControllers::class, 'updateAction']);

require __DIR__.'/auth.php';
