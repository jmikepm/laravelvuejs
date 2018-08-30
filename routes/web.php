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
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function(){
	// Obtener todos los registro
		// $users = User::get();
	//obtener los ultimos 5 registros de forma descendente
		$users = User::orderBy('id', 'DESC')->take(5)->get(); 
		return $users;
});
