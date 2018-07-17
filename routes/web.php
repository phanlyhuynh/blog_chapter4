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
// Route::get('/', function () {
//     return 'Welcome to our home page';
// });

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/tickets/create','TicketsController@create');
Route::post('/tickets/create','TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug?}','TicketsController@show');
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug?}/edit','TicketsController@update');
Route::post('/tickets/{slug?}/delete','TicketsController@destroy');
Route::get('sendemail',function (){
    $data = ['name' => 'Learning Laravel'];
    Mail::send('emails.welcome',$data,function ($message){
        $message->from('lyhuynh0806@gmail.com','Learning Laravel');
        $message->to('lyhuynh0806@gmail.com')->subject('Learning Laravel test send email');
    });
    return "your email has been sent successfully";
});
Route::post('/comment','CommentsController@newComment');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/register','Auth\RegisterController@showRegistrationForm');
Route::post('users/register','Auth\RegisterController@register');
Route::get('users/logout','Auth\LoginController@logout');
Route::get('users/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login','Auth\LoginController@login');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'], function () {
    Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit','UsersController@update');
    Route::get('/','PagesController@home');
    Route::get('posts', 'PostsController@index');
    Route::get('posts/create', 'PostsController@create');
    Route::post('posts/create', 'PostsController@store');
    Route::get('posts/{id?}/edit', 'PostsController@edit');
    Route::post('posts/{id?}/edit','PostsController@update');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/create', 'CategoriesController@store');
});
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');