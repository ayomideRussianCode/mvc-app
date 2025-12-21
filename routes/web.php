<?php

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/user/register', 'UserController@showRegisterForm');
Route::get('/user/login', 'UserController@showLoginForm');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/admin', 'AdminController@admin');
Route::get('/admin/users/profile', 'UserController@showProfile');
Route::get('/user/test/{id}', 'UserController@test');



Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@loginUser');
Route::post('/logout', 'UserController@logout');
Route::post('/admin/users/update', 'UserController@updateProfile');
Route::post('/admin/profile/users/password/update', 'UserController@updateUserProfilePassword');


















// $router = new Route();

// // $router->get('/user/test/', 'UserController@test');

// // $router->dispatch();

// $router->get( '/' , 'HomeController@index');
// $router->get('/contact', 'HomeController@contact'); 
// $router->get('/user/register', 'UserController@showRegisterForm');
// $router->get('/user/login', 'UserController@showLoginForm');
// $router->get('/dashboard', 'AdminController@dashboard');
// $router->get('/admin', 'AdminController@admin');
// $router->get('/admin/users/profile', 'UserController@showProfile');
// $router->get('/user/test/{id}', 'UserController@test');



// $router->post('/register', 'UserController@register');
// $router->post('/login', 'UserController@loginUser');
// $router->post('/logout', 'UserController@logout');
// $router->post('/admin/users/update', 'UserController@updateProfile');
// $router->post('/admin/profile/users/password/update', 'UserController@updateUserProfilePassword');





































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
