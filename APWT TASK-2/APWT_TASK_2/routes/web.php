<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PagesController;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactController;


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

/*Route::get('/home', function () {
    return view('home');
});*/

//Basic Route
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/teams', [PagesController::class, 'teams'])->name('teams');
Route::get('/about', [PagesController::class, 'about'])->name('about');


//Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

//Customer Route
//Route::get('/customerList', [CustomerController::class, 'customerList'])->name('customerList');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::get('/loginList', [LoginController::class, 'loginList'])->name('loginList');

Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::post('/registration',[RegistrationController::class,'validateRegistration'])->name('registration');
// Route::get('/login',[LoginController::class,'Login'])->name('login');
 
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');