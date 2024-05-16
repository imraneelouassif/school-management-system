<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/table', function () {
    return view('layouts.table');
});
Route::get('/teacher', function () {
    return view('layouts.table');
});
Route::get('/table2', function () {
    return view('layouts.taba');
});
Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/register', function () {
    return view('layouts.register');
});
Route::get('/formulaire', function () {
    return view('layouts.formulaire');
}); 

use App\Http\Controllers\table1;
 
Route::get('/layouts/formulaire', [table1::class, 'formulaire'])->name('formulaire');


Route::get('/user', [table1::class, 'index']);
