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
    return view('index');
});

/*Route::get('/user', 'UserController@index');

Route::post('/user/register/sending', function(\Illuminate\Http\Request $request) {
	if($request->hasFile('upload_profile')) {
		var_dump($request->file('upload_profile'));
	}
});*/

/*Route::get('/posts','PostsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/


/*if(in_array(Request::segment(1), ['en', 'fa'])) {
	Route::prefix(Request::segment(1))->group(function () {
		App::setLocale(Request::segment(1));
		
		//Routes
		Route::get('user/create','UserController@create');
		Route::post('user','UserController@store');

	});
};*/

Route::get('user/create','UserController@create');
Route::post('user','UserController@store');

Route::get('upload', 'UploadController@choose');
Route::post('upload', 'UploadController@upload');

Route::get('admin', 'AdminController@index');

Route::get('register', 'UserController@registerForm');
Route::post('register', 'UserController@register');