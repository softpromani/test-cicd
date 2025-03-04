<?php

use Illuminate\Support\Facades\Artisan;
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
    return view('welcome');
});

Route::get('/check',function(){
    return 123;
});
Route::get('/run-migrations', function () {
    if (request('key') !== 'Manish@123') {
        abort(403);
    }
    Artisan::call('migrate', ['--force' => true]);
    return 'Migrations executed!';
});

