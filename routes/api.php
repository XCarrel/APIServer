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

Route::group(['middleware' => ['cors']], function () {
    Route::apiResource('dii/users', 'DIIUserController');
    Route::apiResource('sjm/recipes', 'SJMRecipeController');
    Route::apiResource('qns/wines', 'QNSWineController');
    Route::apiResource('ajdqrr/jobs', 'AJDQRRJobController');
    Route::apiResource('nhy/accounts', 'NHYAccountController');
    Route::apiResource('nhy/transactions', 'NHYTransactionController');
    Route::get('nhy/accounts/{id}/transactions', 'NHYAccountController@transactionsOf');
    Route::get('nhy/accounts/{aid}/transactions/{tid}', 'NHYAccountController@transaction');
    Route::post('nhy/accounts', 'NHYAccountController@newaccount'); // create a bank account
    Route::patch('nhy/accounts','NHYAccountController@updateaccount'); // update a bank account
    Route::post('nhy/transactions','NHYAccountController@newtransaction'); // add a transaction
    Route::apiResource('jsn/shops', 'JSNShopController');
    Route::apiResource('pbn/assets', 'PBNAssetController');
    Route::apiResource('xcl/flowers', 'XCLFlowerController');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

