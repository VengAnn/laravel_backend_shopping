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
    return view('welcome');
});

//check connection db with mysql
use Illuminate\Support\Facades\DB;

Route::get('/check-db-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Connected Successfully to: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Could not connect to database, Please check your Configuration. error:" . $e);
    }
});
