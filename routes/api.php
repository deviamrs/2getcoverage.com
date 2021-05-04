<?php

use App\Http\Controllers\Api\Blog\BLogListController;
use App\Http\Controllers\Api\Company\CompanyController;
use App\Http\Controllers\Api\TeamListController;
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