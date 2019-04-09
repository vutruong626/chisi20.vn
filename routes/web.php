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

// Route::get('/', function () {

//     return view('welcome');
// });

Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@getindex')->name('index');
    Route::get('/gioi-thieu.html','Frontend\\PagesController@getAbout')->name('about');
    Route::get('/lien-he.html','Frontend\\PagesController@getContact')->name('contact');

    // ProductsController
    Route::get('/danh-sach-san-pham.html','Frontend\\ProductController@getMenuproducts')->name('menu_products');
});
/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
