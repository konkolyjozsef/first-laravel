<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Hirlevel_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*
Route::get('/home', [App\Http\Controllers\Hirlevel::class, 'index'])->name('home');
*/

//meghivom route-al users néven ekresztül fut de lehet más is, utána melyik controllert akarom használni majd azon belül melyik osztályt

Route::get('hirek',[Hirlevel_controller::class,'getData']);


Route::get('/newspage',function (){
    return view('newspage');
});