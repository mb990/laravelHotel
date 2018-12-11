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

Route::get("/", "PagesController@index")->name('index');
Route::get("/rooms", "PagesController@rooms");
Route::get("/about", "PagesController@about");
Route::get("/contact", "PagesController@contact");
Route::get("/news", "PagesController@news");
// Route::get("/news", "PagesController@sidebar");
Route::get("/news/{id}", "PagesController@view_news");
Route::get("/dashboard", "PagesController@dashboard");
Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');  NE TREBA MI JER RADI ISTO STO I DASHBOARD

// Route::prefix('admin')->group(function() {
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     });

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.admin');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/admin/news', 'AdminNewsController@index')->name('admin.news');
Route::get('admin/view-news/{id}', 'AdminNewsController@show');
Route::get('admin/add-news', 'AdminNewsController@create')->name('admin.add-news');
Route::post('admin/add-news/submit', 'AdminNewsController@store')->name('admin.create-news');
Route::get('admin/edit-news/{id}', 'AdminNewsController@edit');
// Route::post('admin/edit-news/submit', 'AdminNewsController@update');
Route::put('admin/edit-news/submit/{id}', 'AdminNewsController@update');
// Route::put('admin/edit-news/submit',array('as'=>'admin.edit-news','uses'=>'AdminNewsController@update'));
Route::delete('admin/edit-news/{id}', 'AdminNewsController@destroy');

Route::get("/admin/users", "UsersController@index")->name('users');
Route::get('/user/{id}', 'UsersController@show');
