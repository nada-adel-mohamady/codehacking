<?php
use App\User;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/role',function(){
  $user=User::findOrFail(1);
  return $user->role->name;
 /* foreach ($user->role as $r) {
  	# code...
  	return $r->name;
  }*/

});

Route::resource('admin/users','AdminUsersController');

Route::get('/admin',function(){


	return view('admin.index');
	//return view('layouts.admin');
});
