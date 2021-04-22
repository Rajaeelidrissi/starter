<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\Front\UserController;

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
   /* $data=[];
    $data['id']=5;
    $data['name']='rajae';*/
    return view('welcome');
});

Route::get('/test1', function () {
    return view('master');
});
Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');
Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('b');

Route::namespace('Front')->group(function(){

    Route::get('index',[UserController::class,'getIndex']);
//Route::get('users',[UserController::class,'showAdminName']);

});
/*

Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    //set of routes
    Route::get('/',function(){
       return 'work' ;
    });
   Route::get('show',[UserController::class,'showAdminName']);
});
Route::prefix('users')->group(function(){
    //set of routes
   Route::get('/',function(){
       return 'work' ;
     });
   Route::get('show','UserController@showAdminName');
});
Route::get('/check',function(){
    return 'middleware';
})->middleware('auth');
Route::group(['namespace'=>'Admin'],function() {
    Route::get('second', [SecondController::class,'showString']);
    Route::get('second2', [SecondController::class,'showString2']);
});
Route::get('login',function(){
    return 'Must be login to access this route ';
})->name('login');*/
Route::resource('news', NewsController::class);

