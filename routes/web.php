<?php

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/user/register', 'UserController@showRegisterForm');
Route::get('/user/login', 'UserController@showLoginForm');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/admin', 'AdminController@admin');
Route::get('/admin/users/profile', 'UserController@showProfile');



Route::post('/register', 'UserController@register')->name('register');
Route::post('/login', 'UserController@loginUser')->name('login');
Route::post('/logout', 'UserController@logout');
Route::post('/admin/users/update', 'UserController@updateProfile');
Route::post('/admin/profile/users/password/update', 'UserController@updateUserProfilePassword');



































// $router = new Route();

// // $router->get('/user/test/', 'UserController@test');

// // $router->dispatch();


// $routes = [

//     'GET' => [
   
//     '/about' => 'HomeController@about',
//      '/contact' => 'HomeController@contact',
//      '/user/register' => 'UserController@showRegisterForm',
//     '/user/login' => 'UserController@showLoginForm',
//     '/dashboard' => 'AdminController@dashboard',
//      '/admin' => 'AdminController@admin',
//     '/admin/users/profile' => 'UserController@showProfile',



//     ],

//     'POST' => [
//         '/register' => 'UserController@register',
//         '/login' => 'UserController@loginUser',
//         '/logout' => 'UserController@logout',
//         '/admin/users/update' => 'UserController@updateProfile',
//         '/admin/profile/users/password/update' => 'UserController@updateUserProfilePassword',



//     ]
//     ];






// $routes = [
//     '' => 'HomeController@index',
//     'about' => 'HomeController@about',
//     'user/register' => 'UserController@register',


// ];
