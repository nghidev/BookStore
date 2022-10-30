<?php
use App\Models\Product;
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
Route::get('fe/search', function () {
    
    // Check for search input
    if (request('search')) {
        $product = Product::where('name', 'like', '%' . request('search') . '%')->get();
    } 
    else {
        $product = Product::all();
    }
    $check = request('search')== null? 0 : 1;
    return view('FE.test')->with(['product'=>$product,'check'=>$check]);
});

// ======================Profile======================
Route::get('fe/viewProfile', [App\Http\Controllers\FE\HomeController::class, 'viewProfile'])->name('fe.viewProfile');
Route::post('fe/updateProfile', [App\Http\Controllers\FE\HomeController::class, 'updateProfile'])->name('fe.updateProfile');
//Thêm ảnh avartar
Route::post('fe/profile/storeAvatar', [App\Http\Controllers\FE\HomeController::class, 'storeAvatar'])->name('fe.profile.storeAvatar');



// ======================BE======================
Route::get('/be/home', [App\Http\Controllers\BE\AdminController::class, 'index'])->name('BE.index');

// ======================BE PRODUCT======================
// vào trang chứa form thêm sản phẩm 
Route::get('/be/product', [App\Http\Controllers\Be\ProductController::class, 'index'])->name('BE.product.index');
//tiến hành tạo một đội tượng mới Product -> thêm sản phẩm mới 
Route::post('/be/product/store', [App\Http\Controllers\Be\ProductController::class, 'store'])->name('BE.product.store');
