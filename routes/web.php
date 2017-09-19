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

Route::get('/', 'MainController@index');
Route::get('/report-over-20', 'ReportController@reportFaces');
Route::get('/report-kids-less-7', 'ReportController@reportKids');

foreach (['faces' => 'FaceController', 'kids' => 'KidController'] as $prefix => $controller) {
    Route::group(['prefix' => $prefix], function () use ($controller) {
        Route::get('', $controller . '@index');
        Route::get('add', $controller . '@add');
        Route::get('edit/{id}', $controller . '@edit');
        Route::post('save', $controller . '@store');
        Route::get('delete/{id}', $controller . '@delete');
    });
}
