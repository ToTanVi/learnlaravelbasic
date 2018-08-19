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
Auth::routes();

Route::get('/', function () {
	return redirect('/home');
});

Route::get('/home','FoodController@GetFoodHome')->name('Home');


Route::get('/promotion', function() {
	return view('promotion');
});

Route::get('/{food}','FoodController@GetFoodCate');

Route::get('doan/{name}', 'FoodController@GetDoAnChild');

Route::get('douong/{name}', 'FoodController@GetDoUongChild');

Route::get('food/{id}', 'FoodController@GetFoodID')->where('id', '[0-9]+');

Route::get('/login', function() {
	return view('auth.login');
})->name('login');

Route::get('/logout','Auth\LogoutController@logout');

Route::get('/register', function() {
	return view('auth.register');
})->name('register');

Route::get('/admin/index', function() {
	$name = "Dashboard";
	return view('admin.dashboard',compact('name'));
})->middleware('admin');

Route::group(['prefix'=>'admin'], function() {

	Route::get('food','FoodController@GetAllFood');

	Route::group(['prefix' => 'food'], function() {

		Route::get('add', function() {
			$name = "Thêm sản phẩm";
			return view('admin.addproduct', compact('name'));
		});

		Route::post('add/addnew', 'FoodController@AddFood')->name('AddFood');

		Route::get('edit/{id}', 'FoodController@EditFood')->name('EditFood');

		Route::post('update', 'FoodController@UpdateFood')->name('UpdateFood');

		Route::get('delete/{id}', 'FoodController@DeleteFood');
	});
});
