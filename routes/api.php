<?php

use Illuminate\Http\Request;


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
Route::prefix('dii')->group(function () {
    Route::apiResource('users', 'DIIUserController');
    Route::post('connection', 'DIIUserController@connection');
    Route::post('subscription', 'DIIUserController@subscription'); // This is not restfull but for this purpose it's ok
});


Route::apiResource('sjm/recipes', 'SJMRecipeController');
Route::apiResource('qns/wines', 'QNSWineController');
Route::apiResource('ajdqrr/jobs', 'AJDQRRJobController');
Route::apiResource('nhy/accounts', 'NHYAccountController');

Route::post('nhy/accounts', 'NHYAccountController@newaccount'); // create a bank account
Route::patch('nhy/accounts','NHYAccountController@updateaccount'); // update a bank account
Route::post('nhy/transactions','NHYAccountController@transaction'); // add a transaction

Route::apiResource('jsn/shops', 'JSNShopController');
Route::apiResource('pbn/assets', 'PBNAssetController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

