<?php

use App\Http\Controllers\Api\Blog\BLogListController;
use App\Http\Controllers\Api\Company\CompanyController;
use App\Http\Controllers\Api\TeamListController;
use App\Http\Controllers\VehicleInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/team' , TeamListController::class);

Route::get('/companylist' , [CompanyController::class , 'index'])->name('company.index');
Route::get('/company/{company}' , [CompanyController::class , 'show'])->name('company.show');

Route::get('/bloglist' , BLogListController::class)->name('bloglist.index');

//Route::post('/VehicleInfo', [VehicleInfoController::class,'VehicleInfo']);
// Route::post('VehicleInfo', [VehicleInfoController::class,'VehicleInfo']);
Route::post('/VehicleInfoYear/{year}', [VehicleInfoController::class,'VehicleInfoYear']);
Route::post('VehicleInfoMaker/{year}/{maker}', [VehicleInfoController::class,'VehicleInfoMaker']);
Route::post('VehicleInfoOther/{other}', [VehicleInfoController::class,'VehicleInfoOther']);
Route::post('VehicleInfoModel/{model}', [VehicleInfoController::class,'VehicleInfoModel']);
Route::post('VehicleInfoInsurance/{insurance}', [VehicleInfoController::class,'VehicleInfoInsurance']);


Route::post('VehicleInfoTrin', [VehicleInfoController::class,'VehicleInfoTrin']);

