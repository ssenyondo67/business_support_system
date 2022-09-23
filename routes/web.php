<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AutheticationController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\WinnersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RewardsController;


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

// Route::get('/home',[AutheticationController::class,'home'])->name('home');
Route::get('/login',[AutheticationController::class, 'login'])->name('login')->middleware('alreadylogin');
Route::post('/loginUser', [AutheticationController::class,'loginUser'])->name('loginUser');
Route::get('/logoutUser',[AutheticationController::class,'logoutUser'])->name('logoutUser');

//    customer
Route::get('/customerRegistration',[CustomersController::class,'registration'])->name('customerRegistration')->middleware('alreadylogin');
Route::get('/editCustomerProfile',[CustomersController::class,'editCustomerProfile'])->name('editCustomerProfile')->middleware('loginCheck');
Route::post('/updateCustomerProfile/{id}',[CustomersController::class,'updateCustomerProfile'])->name('updateCustomerProfile')->middleware('loginCheck');
Route::post('/registerCustomer', [CustomersController::class,'registerCustomer'])->name('registerCustomer')->middleware('loginCheck');
Route::get('/cdashboard',[CustomersController::class,'dashboard'])->name('cdashboard')->middleware('loginCheck');

//     Admin
Route::get('/adminRegistration',[AdminsController::class,'registration'])->name('adminRegistration')->middleware('loginCheck');
Route::get('/editAdminProfile',[AdminsController::class,'editAdminProfile'])->name('editAdminProfile')->middleware('loginCheck');
Route::post('/updateAdminProfile/{id}',[AdminsController::class,'updateAdminProfile'])->name('updateProfile')->middleware('loginCheck');
// ->middleware('loginCheck');
Route::post('/registerAdmin', [AdminsController::class,'registerAdmin'])->name('registerAdmin');
Route::get('/dashboard',[AdminsController::class,'dashboard'])->name('dashboard')->middleware('loginCheck');

        //    Reward
Route::get('/addReward',[RewardsController::class,'add_reward'])->name('add_reward')->middleware('loginCheck');
Route::post('/registerReward', [RewardsController::class,'registerReward'])->name('registerReward');

//    products
Route::get('/products',[ProductsController::class,'displayProducts'])->name('products')->middleware('loginCheck');
Route::get('/home',[ProductsController::class,'home'])->name('home')->middleware('loginCheck');

// participant 
Route::get('/participants',[ParticipantsController::class,'displayParticipants'])->name('participants')->middleware('loginCheck');
Route::get('/participantlist',[ParticipantsController::class,'displayParticipantlist'])->name('participantlist')->middleware('loginCheck');

//   report
Route::get('/showreport',[ReportController::class,'showreport'])->name('showreport')->middleware('loginCheck');

    //  sales
Route::get('/product/{id}',[SalesController::class,'booking'])->name('booking')->middleware('loginCheck');
Route::post('/book/{id}',[SalesController::class,'savebooking'])->name('savebooking');