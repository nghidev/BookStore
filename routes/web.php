<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FE\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\FE\HomeController::class, 'home'])->name('home');

// ======================FE======================
Route::get('/', [App\Http\Controllers\FE\HomeController::class, 'index'])->name('fe.index');
Route::get('fe/detail/{id}', [App\Http\Controllers\FE\HomeController::class, 'detail'])->name('fe.detail');
Route::get('fe/order', [App\Http\Controllers\FE\HomeController::class, 'order'])->name('fe.order');
Route::post('fe/updateProfile', [App\Http\Controllers\FE\HomeController::class, 'updateProfile'])->name('fe.updateProfile');
//search
Route::get('fe/test', [App\Http\Controllers\FE\HomeController::class, 'test'])->name('fe.test');
// Route::get('fe/search', function () {
    
//     // Check for search input
//     if (request('search')) {
//         $product = Product::where('name', 'like', '%' . request('search') . '%')->get();
//     } 
//     else {
//         $product = Product::all();
//     }
//     $check = request('search')== null? 0 : 1;
//     return view('FE.test')->with(['product'=>$product,'check'=>$check]);
// });
// ======================Profile======================
Route::get('fe/viewProfile', [App\Http\Controllers\FE\HomeController::class, 'viewProfile'])->name('fe.viewProfile');
Route::post('fe/updateProfile', [App\Http\Controllers\FE\HomeController::class, 'updateProfile'])->name('fe.updateProfile');
//Thêm ảnh avartar
Route::post('fe/profile/storeAvatar', [App\Http\Controllers\FE\HomeController::class, 'storeAvatar'])->name('fe.profile.storeAvatar');
Route::get('fe/cats/{id}', [App\Http\Controllers\FE\HomeController::class, 'getProductByCat'])->name('fe.cats');
Route::get('fe/viewOrderDetail/{id}', [App\Http\Controllers\FE\HomeController::class, 'viewOrderDetail'])->name('fe.cats');

// ======================BE======================
Route::get('/be/home', [App\Http\Controllers\BE\ProductController::class, 'index'])->name('BE.index')->middleware('admin');
Route::get('/be/login', [App\Http\Controllers\BE\AdminController::class, 'login'])->name('BE.login');
Route::post('/be/submitLogin', [App\Http\Controllers\BE\AdminController::class, 'handleLogin'])->name('BE.subitLogin');

// ======================BE PRODUCT======================
Route::get('/be/product', [App\Http\Controllers\Be\ProductController::class, 'index'])->name('BE.product.index');
Route::get('/be/product/create', [App\Http\Controllers\Be\ProductController::class, 'create'])->name('BE.product.create');
Route::post('/be/product/store', [App\Http\Controllers\Be\ProductController::class, 'store'])->name('BE.product.store');
Route::get('/be/product/edit/{id}', [App\Http\Controllers\Be\ProductController::class, 'edit'])->name('BE.product.edit');
Route::post('/be/product/update', [App\Http\Controllers\Be\ProductController::class, 'update'])->name('BE.product.update');
Route::get('/be/product/destroy/{id}', [App\Http\Controllers\Be\ProductController::class, 'destroy'])->name('BE.product.destroy');

// ======================SHOPPING CART======================
Route::get('fe/cart', [App\Http\Controllers\FE\CartController::class, 'index'])->name('Fe.cart');
Route::get('fe/cart/{id}', [App\Http\Controllers\FE\CartController::class, 'addCart'])->name('Fe.cart.add');
Route::get('fe/cart/delete/{id}', [App\Http\Controllers\FE\CartController::class, 'destroy'])->name('Fe.cart.destroy');
Route::get('fe/cart/xoa', [App\Http\Controllers\FE\CartController::class, 'xoa'])->name('Fe.cart.xoa');


// ======================ORDER FOR USER======================
Route::get('fe/orderByUser', [App\Http\Controllers\FE\OrderByFeController::class, 'index'])->name('Fe.orderByUser');
Route::get('fe/orderByUser/crete', [App\Http\Controllers\FE\OrderByFeController::class, 'create'])->name('Fe.orderByUser.create');
Route::post('fe/orderByUser/store', [App\Http\Controllers\FE\OrderByFeController::class, 'store'])->name('Fe.orderByUser.store');
Route::get('fe/orderByUser/destroy', [App\Http\Controllers\FE\OrderByFeController::class, 'destroy'])->name('Fe.orderByUser.destroy');


// ======================ORDER FOR Admin======================
Route::get('fe/orderByAdmin', [App\Http\Controllers\BE\OrderByBeController::class, 'index'])->name('Fe.orderByAdmin');
