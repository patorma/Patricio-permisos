<?php

use App\User;
use Illuminate\Support\Facades\Route;
use App\PatricioPermission\Models\Role;
//use App\PatricioPermission\Models\Role;

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

Route::get('/test', function () {

    /*
        return   Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes'
    ]);

    return   Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access' => 'no'
    ]);

    return   Role::create([
        'name' => 'test',
        'slug' => 'test',
        'description' => 'test',
        'full-access' => 'no'
    ]);
    */
  
   $user = User::find(1);
   //con attach se crea registros
   //$user->roles()->attach([1,2,3]);
   // con esto eliminamos el rol 1 asociado al usuario 1
   //$user->roles()->detach([3]);
   //esto hace el attach y detach al mismo tiempo
   $user->roles()->sync([1,2]);
   return  $user->roles;

   
});
