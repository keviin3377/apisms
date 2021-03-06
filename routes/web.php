<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', 'App\Http\Controllers\HomeController@show');
Route::post('/', 'App\Http\Controllers\HomeController@storePhoneNumber');
Route::post('/custom', 'App\Http\Controllers\HomeController@sendCustomMessage');