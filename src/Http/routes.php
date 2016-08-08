<?php
/**
 * Created by PhpStorm.
 * User: stepanov
 * Date: 08.08.2016
 * Time: 13:28
 */

Route::group(['middleware' => ['web'], 'namespace' => 'MacGruber11\FFNews\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'FFNewsCategoryController@show');
});