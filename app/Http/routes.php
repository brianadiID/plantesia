<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
| 
| @author by Brian Adi Kusumo (brianadikusumo@gmail.com)
|
*/

Route::get('/', 'SiteController@index');
//Route::get('home', 'HomeController@index');
Route::get('home', 'SiteController@index');

Route::get('admin', 'AdminController@index');
Route::get('site/admin', 'AdminController@index');

Route::get('compose', 'ComposeController@index');
Route::get('site/compose', 'ComposeController@index');

Route::get('mailbox', 'MailboxController@index');
Route::get('site/mailbox', 'MailboxController@index');

Route::get('site/home', 'SiteController@index');
Route::get('site/explore', 'MapViewController@index');


Route::get('role',[
   'middleware' => 'Role:al',
   'uses' => 'TestController@index',
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

get('users', function(){
	App\User::create([
			"name" => "lili",
			"email" => "lili@email.com",
			"password" => bcrypt("password")
		]);
	return App\User::all();
});

Route::get('upload', function() {
  return View::make('pages.upload');
});
Route::post('apply/upload', 'ApplyController@upload');

Route::get('imageUploadForm', 'ImageController@upload' );
Route::post('imageUploadForm', 'ImageController@store' );
Route::get('showLists', 'ImageController@show' );



