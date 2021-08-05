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

Route::get('/client', 'ClientController@index');
Route::get('/supplier', 'SupplierController@index');
Route::get('/product', 'ProductController@index');
Route::get('/sale', 'SaleController@index');
Route::get('/purchase', 'PurchaseController@index');
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoicedetail', 'InvoiceDetailController@index');
