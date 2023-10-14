<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

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
//Route::group( [ 'domain' => Config::get('urls.ADMIN_DOMAIN')], function () {
//    require base_path('routes/admin.php');
//});

Route::group( [ 'domain' => Config::get('urls.API_DOMAIN')], function () {
    require base_path('routes/api.php');
});


Route::get('/', function () {
    return view('welcome');
});
