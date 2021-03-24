<?php


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

Route::get('/home', 'HomeController@index')->name('home');





Route::get('admin/path',function(){
    return 'test path';
})->middleware('AuthAdmin:webadmin');

Route::get('/admin/login','Admin@login');
Route::post('/admin/login','Admin@login_post');

Route::get('/admin/home',function () {
    return view('admin.home');
});


// Route::get('/user/panel','UserPanel@index');

// Route::post('/user/destroy','UserPanel@destroy');


Route::group(['middleware' => 'AuthAdmin:webadmin'], function () {
    Route::resource('userpanel', UserPanel::class); 
    Route::resource('product', 'ProductController');
    Route::resource('categories', 'CategoryController');
    Route::resource('brands', 'BrandController');
});