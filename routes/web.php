<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

Route::get('/curso', [CursoController::class, 'index']);
Route::get('/curso/create', [CursoController::class, 'create']);
Route::get('/curso/show', [CursoController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/create', [HomeController::class, 'create']);
Route::get('/home/show', [HomeController::class, 'show']);

Route::get('/client', 'ClientController@index');
Route::get('/supplier', 'SupplierController@index');
Route::get('/product', 'ProductController@index');
Route::get('/sale', 'SaleController@index');
Route::get('/purchase', 'PurchaseController@index');
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoicedetail', 'InvoiceDetailController@index');
