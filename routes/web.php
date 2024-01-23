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

Route::get('/Dashboard', function () {
    return view('layouts.master');
});

Route::prefix('/Customer')->group(function () {
    Route::get('/', function () {
    return view('Customer.Customer-list');
});
    Route::get('/add', function () {
    return view('Customer.Customer-add');
});
Route::get('/edit', function () {
    return view('Customer.Customer-edit');
});
});
Route::get('/Report', function () {
    return view('Report.Report');
});

Route::prefix('/Products')->group(function () {
    Route::get('/', function () {
    return view('Products.Product-list');
});
    Route::get('/add', function () {
    return view('Products.Product-add');
});
Route::get('/edit', function () {
    return view('Products.Product+');
});
Route::get('/editt', function () {
    return view('Products.Product-editt');
});
});

Route::prefix('/Employee')->group(function () {
    Route::get('/', function () {
    return view('Employee.Employee-list');
});
    Route::get('/add', function () {
    return view('Employee.Employee-add');
});
Route::get('/edit', function () {
    return view('Employee.Employee-edit');
});
});