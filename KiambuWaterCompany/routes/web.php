<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')/*->middleware('check_user')*/;
Route::get('/pay', 'HomeController@pay')->name('pay');

Route::resource('charges', 'Janauary2018ChargesController');
Route::resource('units', 'UnitsController');
Route::resource('accountdetails', 'AccountDetailsController');
Route::resource('payments', 'Payments');
Route::resource('status', 'StatusController');

Route::group(['prefix'=>'customers', 'as'=>'customers.'], function(){
    Route::get('/', 'CustomersController@index')->name('index');
    Route::post('/destroy', 'CustomersController@destroy')->name('destroy'); 
    Route::post('/update', 'CustomersController@update')->name('update');
    Route::post('/store', 'CustomersController@store')->name('store');
    Route::get('/get_customer/{customer}', 'CustomersController@getCustomer');
});

// Route::resource('customers', 'CustomersController');

// Route::any('{query}', function() {return redirect('/'); })
// ->where('query', '.*');