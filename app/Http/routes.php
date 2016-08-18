<?php

Route::controller('auth/password', 'Auth\PasswordController', [
    'getEmail' => 'auth.password.email',
    'getReset' => 'auth.password.reset'
]);

Route::controller('auth', 'Auth\AuthController', [
    'getLogin' => 'auth.login',
    'getLogout' => 'auth.logout'
]);

Route::get('backend/users/{users}/confirm', ['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);
Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);

Route::get('backend/pages/{pages}/confirm', ['as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);
Route::resource('backend/pages', 'Backend\PagesController', ['except' => ['show']]);

Route::get('backend/language/{pages}/confirm', ['as' => 'backend.language.confirm', 'uses' => 'Backend\LanguageController@confirm']);
Route::resource('backend/language', 'Backend\LanguageController', ['except' => ['show']]);

Route::get('backend/config/{pages}/confirm', ['as' => 'backend.config.confirm', 'uses' => 'Backend\ConfigController@confirm']);
Route::resource('backend/config', 'Backend\ConfigController', ['except' => ['show']]);


Route::get('backend/blog/{blog}/confirm', ['as' => 'backend.blog.confirm', 'uses' => 'Backend\BlogController@confirm']);
Route::resource('backend/blog', 'Backend\BlogController');

Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);
