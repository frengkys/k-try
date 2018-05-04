<?php

use Illuminate\Http\Request;
Use App\UserReview;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user-reviews', 'UserReviewController@index');
Route::post('user-reviews', 'UserReviewController@store');
Route::post('user-reviews/{id}', 'UserReviewController@update');
Route::delete('user-reviews/{id}', 'UserReviewController@delete');