<?php

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
// use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('index');
});

Route::view('/program', 'program');
Route::view('/berita', 'berita');
Route::view('/donasi', 'donasi');

Route::get('/test', function () {
    return view('test');
});

Route::get('/donation/create', 'DonationController@create')->name('donation.create');
Route::post('/donation/create', 'DonationController@store')->name('donation.store');

// Route::livewire('/testlive', 'donation.index')->layout('welcome')->name('donation.index');
// Route::livewire('/donasi/test', 'donation.create')->layout('welcome')->name('donation.create');
// Route::livewire('/testlive/edit/{id}', 'donation.edit')->layout('welcome')->name('donation.edit');

Auth::routes();

Route::get('/invoice', 'DonationController@invoice');
Route::get('/invoice-pdf/{id}', 'DonationController@pdf');


Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth']);
Route::get('/home', 'DonationController@admin')->name('home')->middleware(['auth']);
Route::get('/home/donations', 'DonationController@AdminIndex')->name('donations.index')->middleware(['auth']);


// Route::get('/admin', function(){    
//     return 'you are admin';
// })->middleware(['auth', 'auth.admin']);

Route::prefix('category')->middleware(['auth'])->group(function() {
    Route::get('/', 'CategoryController@index')->name('category.index');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('/create', 'CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/edit/{categories}', 'CategoryController@update')->name('category.update');
    Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
});


Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
    Route::get('/inpersonate/user/{id}', 'ImpersonateController@index')->name('impersonate');
});
Route::get('/admin/impersonate/destroy', 'Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');
