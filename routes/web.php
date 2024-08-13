<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\EshopController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EshopController::class,'index'])->name('home');
Route::get('/products',[EshopController::class,'products'])->name('products');
Route::get('/product-details/{id}',[EshopController::class,'productDetails'])->name('product.details');
Route::get('/category-products/{id}',[EshopController::class,'categoryProducts'])->name('category.products');

Route::get('/direct-add-to-cart/{id}',[CartController::class,'directAddToCart'])->name('cart.direct-add');
Route::post('/add-to-cart/{id}',[CartController::class,'index'])->name('cart.add');
Route::get('/shopping-cart',[CartController::class,'show'])->name('cart.show');
Route::post('/update-shopping-cart/{id}',[CartController::class,'update'])->name('cart.update');
Route::get('/delete-shopping-cart/{id}',[CartController::class,'delete'])->name('cart.delete');

Route::get('/check-out',[CheckoutController::class,'index'])->name('checkout');
Route::get('/customer-email-check',[CheckoutController::class,'emailCheck'])->name('customer-email-check');
Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('order.new');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('order.complete');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
Route::get('/category-add',[CategoryController::class,'index'])->name('category.add');
Route::post('/category-new',[CategoryController::class,'create'])->name('category.create');
Route::get('/category-manage',[CategoryController::class,'manage'])->name('category.manage');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::get('/sub-category-add',[SubCategoryController::class,'index'])->name('subCategory.add');
Route::post('/sub-category-new',[SubCategoryController::class,'create'])->name('subCategory.create');
Route::get('/sub-category-manage',[SubCategoryController::class,'manage'])->name('subCategory.manage');
Route::get('/sub-category-edit/{id}',[SubCategoryController::class,'edit'])->name('subCategory.edit');
Route::post('/sub-category-update/{id}',[SubCategoryController::class,'update'])->name('subCategory.update');
Route::get('/sub-category-delete/{id}',[SubCategoryController::class,'delete'])->name('subCategory.delete');

Route::resource('unit',UnitController::class);
Route::resource('brand',BrandController::class);
Route::resource('product',ProductController::class);
Route::resource('courier',CourierController::class);
Route::resource('user',UserController::class);

Route::get('get-subcategory-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-subcategory-by-category');
Route::get('product/update-status/{id}',[ProductController::class,'updateStatus'])->name('product.updateStatus');

Route::get('admin/manage-order', [AdminOrderController::class, 'index'])->name('admin.manage-order');
Route::get('admin/order-detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.order-detail');
Route::get('admin/order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
Route::post('admin/order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
Route::get('admin/order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
Route::get('admin/download-invoice/{id}', [AdminOrderController::class, 'download'])->name('admin.download-invoice');
Route::get('admin/order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');




});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



