<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StaffController;

// Route::get('/invoice', function () {
//     return view('content.invoice');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/service_detail', function () {
//     return view('content.services_detail');
// });


// Route::get('/print-pdf', [TransactionDetailController::class, 'printPDF']);
// Route::get('print-pdf/{type}', 'TransactionDetailController@printPDF');

Auth::routes();

Route::get('/invoice/{id}', [TransactionDetailController::class, 'generateInvoicePDF'])->name('generateInvoicePDF');
Route::get('/myaccount', [HomeController::class, 'myaccount'])->name('akun-saya');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'news_detail'])->name('news-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/service/{id}', [ServiceController::class, 'service_detail'])->name('service-detail');
Route::get('/transaction', [TransactionDetailController::class, 'transaction_detail'])->name('transaction_detail');
Route::get('/payment', [TransactionDetailController::class, 'payment'])->name('payment');
Route::post('/payment', [TransactionDetailController::class, 'payment_post'])->name('payment-post');
Route::post('/review/store', [ReviewController::class, 'review_store'])->name('review-store');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/billing-payment', [TransactionDetailController::class, 'payment_index'])->name('payment-index');



Route::group(['middleware' => ['admin']], function () {
    Route::get('admin-view', [AdminController::class, 'index'])->name('admin');
    Route::get('admin-view/create', [AdminController::class, 'create'])->name('admin-create');
    Route::post('admin-view/store', [AdminController::class, 'store'])->name('admin-store');
    Route::get('admin-view/{id}/edit', [AdminController::class, 'edit'])->name('admin-edit');
    Route::post('admin-view/{id}/update', [AdminController::class, 'update'])->name('admin-update');
    Route::get('admin-view/{id}/delete', [AdminController::class, 'destroy'])->name('admin-delete');
    Route::get('admin-profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('admin-news', [NewsController::class, 'index'])->name('admin-news');
    Route::get('admin-news/create', [NewsController::class, 'news_create'])->name('news-create');
    Route::post('admin-news/store', [NewsController::class, 'news_store'])->name('news-store');
    Route::get('admin-news/{id}/edit', [NewsController::class, 'news_edit'])->name('news-edit');
    Route::put('admin-news/{id}/update', [NewsController::class, 'news_update'])->name('news-update');
    Route::get('admin-news/{id}/delete', [NewsController::class, 'news_delete'])->name('news-delete');
    Route::get('admin-portfolio', [PortfolioController::class, 'index'])->name('admin-portfolio');
    Route::post('admin-portfolio/store', [PortfolioController::class, 'portfolio_store'])->name('portfolio-store');
    Route::get('admin-portfolio/{id}/edit', [PortfolioController::class, 'portfolio_edit'])->name('portfolio-edit');
    Route::put('admin-portfolio/{id}/update', [PortfolioController::class, 'portfolio_update'])->name('portfolio-update');
    Route::get('admin-portfolio/{id}/delete', [PortfolioController::class, 'portfolio_delete'])->name('portfolio-delete');
    Route::get('admin-services', [ServiceController::class, 'index'])->name('admin-services');
    Route::post('admin-services/store', [ServiceController::class, 'service_store'])->name('service-store');
    Route::get('admin-services/{id}/edit', [ServiceController::class, 'service_edit'])->name('service-edit');
    Route::put('admin-services/{id}/update', [ServiceController::class, 'service_update'])->name('service-update');
    Route::get('admin-services/{id}/delete', [ServiceController::class, 'service_delete'])->name('service-delete');
    Route::get('admin-about', [AboutController::class, 'index'])->name('admin-about');
    Route::post('admin-about/store', [AboutController::class, 'about_store'])->name('about-store');
    Route::get('admin-about/{id}/edit', [AboutController::class, 'about_edit'])->name('about-edit');
    Route::put('admin-about/{id}/update', [AboutController::class, 'about_update'])->name('about-update');
    Route::get('admin-about/{id}/delete', [AboutController::class, 'about_delete'])->name('about-delete');
    Route::get('admin-staff', [StaffController::class, 'index'])->name('admin-staff');
    Route::post('admin-staff/store', [StaffController::class, 'staff_store'])->name('staff-store');
    Route::get('admin-staff/{id}/edit', [StaffController::class, 'staff_edit'])->name('staff-edit');
    Route::put('admin-staff/{id}/update', [StaffController::class, 'staff_update'])->name('staff-update');
    Route::get('admin-staff/{id}/delete', [StaffController::class, 'staff_delete'])->name('staff-delete');
    Route::get('admin-transaction', [TransactionDetailController::class, 'index'])->name('admin-transaction');
    // Route::get('admin-order', [AdminController::class, 'order'])->name('order');
 });
