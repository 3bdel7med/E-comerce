<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ProfileContrloller;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
Route::get('/about',function (){
    return view('frontend.about');
});
Route::get('/contact',function (){
    return view('frontend.contactus');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/carts', [CartController::class,'cartitems'])->name('carts');
    Route::post('/addToCart', [CartController::class,'addToCart'])->name('cart');
    Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');
    Route::get('/makeorder',[CheckoutController::class,'makeorder'])->name('makeorder');
    Route::get('/cart/delete/{id}', [CartController::class,'delete'])->name('cart.delete');
    Route::get('/profile/edit/{id}',[ProfileContrloller::class,'edit'])->name('profile.edit');
    Route::post('/profile/update/{id}',[ProfileContrloller::class,'update'])->name('profile.update');

});

Route::get('/shop', [ShopController::class,'index'])->name('shop');
Route::put('/user', [UsersController::class,'putUpdateUser']);
Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');
Route::post('/makeorder', [CheckoutController::class,'makeorder'])->name('makeorder');
Route::get('/', [FrontendController::class,'index'])->name('index');
Route::get('/category', [FrontendController::class,'category'])->name('category');
Route::get('/category/{slug}', [FrontendController::class,'category_view'])->name('categoryview');
Route::get('/category/{id}', [FrontendController::class,'category_view']);

Route::get('/category/product/{id}', [FrontendController::class,'product_view'])->name('product');
Auth::routes();
//for carts

//for searsh

Route::get('/results', function () {
    $product = App\Models\Product::where('name', 'like' ,  '%' . request('search') . '%' )->get();
    return view('results.results')
        ->with('products' , $product )  ;

}) ;









Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('lang/home', [LangController::class,'index']);
Route::get('lang/change', [LangController::class,'change'])->name('changeLang');

Route::get('stripe', [StripeController::class, 'stripe'])->middleware('admin');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

