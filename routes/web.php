<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blueprint;
use Illuminate\Support\Facades\Scheme;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BCategoryController;
use App\Http\Controllers\BMovieController;
use App\Http\Controllers\BUsersController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TvshowsController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\MoviesController;

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

Route::group(['prefix'=>'index'], function(){
    Route::get('/',[BackendController::class,'index'])->name('admin.all.index');
});

Route::group(['prefix'=>'category'], function(){
    Route::get('/',[BCategoryController::class,'Categoryindex'])->name('admin.category.index');
    Route::get('add/',[BCategoryController::class,'getAddCategory']);
    Route::post('add/',[BCategoryController::class,'postAddCategory'])->name('admin.category.add');
    Route::get('edit/{id}',[BCategoryController::class,'getEditCategory']);
    Route::post('edit/{id}',[BCategoryController::class,'postEditCategory'])->name('admin.category.edit');
    Route::get('delete/{id}',[BCategoryController::class,'deleteCategory']);
});

Route::group(['prefix'=>'movie'], function(){
    Route::get('/',[BMovieController::class,'Movieindex'])->name('admin.movie.index');
    Route::get('add/',[BMovieController::class,'getAddMovie']);
    Route::post('add/',[BMovieController::class,'postAddMovie'])->name('admin.movie.add');
    Route::get('edit/{id}',[BMovieController::class,'getEditMovie']);
    Route::post('edit/{id}',[BMovieController::class,'postEditMovie'])->name('admin.movie.edit');
    Route::get('delete/{id}',[BMovieController::class,'deleteMovie']);
});

Route::group(['prefix'=>'users'], function(){
    Route::get('/',[BUsersController::class,'Usersindex'])->name('admin.users.index');
    Route::get('edit/{id}',[BUsersController::class,'getEditUsers'])->name('admin.users.edit');
    Route::post('edit/{id}',[BusersController::class,'postEditUsers']);
    Route::get('delete/{id}',[BUsersController::class,'deleteUsers']);
});

Route::group(['prefix'=>'homepage'], function(){
    Route::get('/',[HomepageController::class,'homepage'])->name('client.page.index');
});

Route::group(['prefix'=>'signin'], function(){
    Route::get('/',[SigninController::class,'getSignin'])->name('client.page.signin');
    Route::post('/',[SigninController::class,'postSignin']);
});

Route::group(['prefix'=>'signup'], function(){
    Route::get('/',[SignupController::class,'getSignup'])->name('client.page.signup');
    Route::post('/',[SignupController::class,'postSignup']);
});

Route::group(['prefix'=>'logout'], function(){
    Route::get('/',[LogoutController::class,'Logout'])->name('both.page.logout');
});
Route::group(['prefix'=>'tvshows'], function(){
    Route::get('/',[TvshowsController::class,'tvshows'])->name('client.page.tvshows');
});

Route::group(['prefix'=>'movies'], function(){
    Route::get('/',[MoviesController::class,'movies'])->name('client.page.movies');
});

Route::group(['prefix'=>'new'], function(){
    Route::get('/',[NewController::class,'new'])->name('client.page.new');
});