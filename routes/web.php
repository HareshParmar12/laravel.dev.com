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

//  page call with  data (send data)
Route::get('/demo/{name?}/{id?}', function ($name = null, $id = null) {
    $data = compact('id', 'name');
    return view('demo')->with($data);
});

// Route::post('/test', function () {
//     echo "hello";
// });
