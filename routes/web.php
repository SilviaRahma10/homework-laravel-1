<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;

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

Route:: get ('/', [UkmController ::class, 'index']);
Route:: get ('/daftar', [UkmController ::class, 'daftar']);
Route:: post ('/ukms/konfirmasi', [UkmController ::class, 'konfirmasi']);


