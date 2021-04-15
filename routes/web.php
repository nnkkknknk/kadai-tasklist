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

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');





// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy']]);
});



// Route::get('Task/{id}', 'TasksController@show');
// Route::post('Task', 'TasksController@store');
// Route::put('Task/{id}', 'TasksController@update');
// Route::delete('Task/{id}', 'TasksController@destroy');

// // index: showの補助ページ
// Route::get('Task', 'TasksController@index')->name('tasks.index');
// // create: 新規作成用のフォームページ
// Route::get('Tasks/create', 'TasksController@create')->name('tasks.create');
// // edit: 更新用のフォームページ
// Route::get('Tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');



