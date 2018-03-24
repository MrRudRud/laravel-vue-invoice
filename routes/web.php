<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/customers', 'CustomerController@search');
Route::get('/api/products', 'ProductController@search');

Route::get('/api/invoices', 'InvoiceController@index');
Route::get('/api/invoices/create', 'InvoiceController@create');
Route::get('/api/invoices/{id}/edit', 'InvoiceController@edit');