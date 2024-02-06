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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/himpunan', function () {
    return view('himpunan');
});
Route::get('/bso', function () {
    return view('bso');
});

Route::get('/komunitas', function () {
    return view('komunitas');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/renicantik', function () {
    return view('admin.master');
});

// UKM
Route::get('/ukm', 'UkmController@show');
Route::prefix('renicantik')->group(function(){
    Route::get('/add-ukm', 'UkmController@create');
    Route::post('/list-ukm', 'UkmController@store');
    Route::get('/list-ukm', 'UkmController@index');
    Route::get('/ukm/{ukm_id}', 'UkmController@edit');
    Route::put('/ukm/{ukm_id}', 'UkmController@update');
    Route::delete('/ukm/{ukm_id}', 'UkmController@destroy');
});
Route::get('/ukm/{ukm_id}', 'UkmController@upload');


// BSO
Route::get('/bso', 'BsoController@show');
Route::prefix('renicantik')->group(function(){
    Route::get('/add-bso', 'BsoController@create');
    Route::post('/list-bso', 'BsoController@store');
    Route::get('/list-bso', 'BsoController@index');
    Route::get('/bso/{bso_id}', 'BsoController@edit');
    Route::put('/bso/{bso_id}', 'BsoController@update');
    Route::delete('/bso/{bso_id}', 'BsoController@destroy');
});
Route::get('/bso/{bso_id}', 'BsoController@upload');

// Himpunan
Route::get('/himpunan', 'HimpunanController@show');
Route::prefix('renicantik')->group(function(){
    Route::get('/add-himpunan', 'HimpunanController@create');
    Route::post('/list-himpunan', 'HimpunanController@store');
    Route::get('/list-himpunan', 'HimpunanController@index');
    Route::get('/himpunan/{himpunan_id}', 'HimpunanController@edit');
    Route::put('/himpunan/{himpunan_id}', 'HimpunanController@update');
    Route::delete('/himpunan/{himpunan_id}', 'HimpunanController@destroy');
});
Route::get('/himpunan/{himpunan_id}', 'HimpunanController@upload');

// Komunitas
Route::get('/komunitas', 'KomunitasController@show');
Route::prefix('renicantik')->group(function(){
    Route::get('/add-komunitas', 'KomunitasController@create');
    Route::post('/list-komunitas', 'KomunitasController@store');
    Route::get('/list-komunitas', 'KomunitasController@index');
    Route::get('/komunitas/{komunitas_id}', 'KomunitasController@edit');
    Route::put('/komunitas/{komunitas_id}', 'KomunitasController@update');
    Route::delete('/komunitas/{komunitas_id}', 'KomunitasController@destroy');
});
Route::get('/komunitas/{komunitas_id}', 'KomunitasController@upload');