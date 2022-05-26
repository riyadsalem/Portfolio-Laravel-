<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\ServicesController;

use App\Http\Controllers\Payment\PayPalController;
use App\Http\Controllers\Payment\StripeController;


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
    return view('frontend.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function(){

// Admin All Route
Route::controller(AdminController::class)->group(function(){  // Larael 9

    // Edit Profile Route
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','Profile')->name('admin.profile');
    Route::get('/edit/profile','EditProfile')->name('edit.profile');
    Route::post('/store/profile','StoreProfile')->name('store.profile');

    // Change Password Route
    Route::get('/change/password','ChangePassword')->name('change.password');
    Route::post('/update/password','UpdatePassword')->name('update.password');

}); // End Controller(AdminController::class)



// Home Slide All Route
Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/home/slide','HomeSlider')->name('home.slide');
    Route::post('/update/slide','UpdateSlider')->name('update.slider');
}); // End Controller(HomeSliderController::class)


// About Page All Route
Route::controller(AboutController::class)->group(function(){
    Route::get('/about/page','AboutPage')->middleware(['auth'])->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about');
    Route::get('/about','homeAbout')->name('home.about');
    Route::get('/about/multi/image','AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image','StoreMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image','AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}','EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image','UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}','DeleteMultiImage')->name('delete.multi.image');
}); // End Controller(AboutController::class)


// Home Slide All Route
Route::controller(PortfolioController::class)->group(function(){
    Route::get('/all/portfolio','AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio','AddPortfolio')->name('add.portfolio');
    Route::post('/store/portfolio','StorePortfolio')->name('store.portfolio');
    Route::get('/edit/portfolio/{id}','EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio','UpdatePortfolio')->name('update.portfolio');
    Route::get('/delete/portfolio/{id}','DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}','PortfolioDetails')->name('portfolio.details');
    Route::get('/home/portfolio','HomePortfolio')->name('home.portfolio');

}); // End Controller(ProtfolioController::class)


// Blg Category All Route
Route::controller(BlogCategoryController::class)->group(function(){
    Route::get('/all/blog/category','AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category','AddBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category','StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}','EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category','UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}','DeleteBlogCategory')->name('delete.blog.category');
}); // End Controller(BlogCategoryController::class)


// Blog Page All Route
Route::controller(BlogController::class)->group(function(){
    Route::get('/all/blog','AllBlog')->name('all.blog');
    Route::get('/add/blog','AddBlog')->name('add.blog');
    Route::post('/store/blog','StoreBlog')->name('store.blog');
    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::post('/update/blog','UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');
    Route::get('/blog/details/{id}','BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}','CategoryBlog')->name('category.blog');
    Route::get('/blog','HomeBlog')->name('home.blog');
}); // End Controller(BlogController::class)


// Footer All Route
Route::controller(FooterController::class)->group(function(){
    Route::get('/footer/setup','FooterSetup')->name('footer.setup');
    Route::post('/update/footer','UpdateFooter')->name('update.footer');

}); // End Controller(FooterController::class)


// Contact All Route
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','Contact')->name('contact.me');
    Route::post('/store/message','StoreMessage')->name('store.message');
    Route::get('/contact/message','ContactMessage')->name('contact.message');
    Route::get('/delete/message/{id}','DeleteMessage')->name('delete.message');
    Route::get('/message/details{id}','MessageDetails')->name('message.details');

}); // End Controller(ContactController::class)


}); // End middleware(['auth'])


// Services All Route
Route::controller(ServicesController::class)->group(function(){
    Route::get('/all/services','AllServices')->name('all.services');
    Route::get('/add/services','AddServices')->name('add.services');
    Route::post('/store/services','StoreServices')->name('store.service');
    Route::get('/edit/service/{id}','EditService')->name('edit.service');
    Route::post('/update/service','UpdateService')->name('update.service');
    Route::get('/delete/service/{id}','DeleteService')->name('delete.service');
    Route::get('/service/details/{id}','ServiceDetails')->name('service.details');
    Route::get('/service/payment/{id}','ServicePayment')->name('service.payment');
}); 



Route::get('/go-payment',[PayPalController::class,'goPayment'])->name('payment.go');
Route::get('/payment',[PayPalController::class,'payment'])->name('payment');
Route::get('/cancel',[PayPalController::class,'cancel'])->name('payment.cancel');
Route::get('/payment/success',[PayPalController::class,'success'])->name('payment.success');



Route::get('/stripe',[StripeController::class,'stripe']);
Route::post('/stripe',[StripeController::class,'stripePost'])->name('stripe.post');
