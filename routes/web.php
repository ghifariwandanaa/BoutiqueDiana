<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DatabaseBarangController;
use App\Http\Controllers\DatabaseVendorController;
use App\Http\Controllers\DatabaseCustomerController;
use App\Http\Controllers\DatabasePenjualanController;
use App\Http\Controllers\DatabasePenjualanDetailController;
use App\Http\Controllers\DatabasePembelianController;
use App\Http\Controllers\DatabasePembelianDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'dashboard/admin', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::put('/profile', 'ProfileController@update')->name('profile.update');
    });

    Route::controller(DatabaseBarangController::class)
        ->prefix('barang')
        ->as('barang.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahBarang')->name('add');
            Route::match(['get', 'post'], 'ubah/{kode_barang}', 'updateBarang')->name('update');
            Route::delete('hapus/{kode_barang}', 'hapusBarang')->name('destroy');
        });

    Route::controller(DatabaseVendorController::class)
        ->prefix('vendor')
        ->as('vendor.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahVendor')->name('add');
            Route::match(['get', 'post'], 'ubah/{kode_vendor}', 'updateVendor')->name('update');
            Route::delete('hapus/{kode_vendor}', 'hapusVendor')->name('destroy');
        });

    Route::controller(DatabaseCustomerController::class)
        ->prefix('customer')
        ->as('customer.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahCustomer')->name('add');
            Route::match(['get', 'post'], 'ubah/{kode_customer}', 'updateCustomer')->name('update');
            Route::delete('hapus/{kode_customer}', 'hapusCustomer')->name('destroy');
        });

    Route::controller(DatabasePenjualanController::class)
        ->prefix('penjualan')
        ->as('penjualan.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahPenjualan')->name('add');
            Route::delete('hapus/{kode_transaksi}', 'hapusPenjualan')->name('destroy');
        });

    Route::controller(DatabasePenjualanDetailController::class)
        ->prefix('detailPenjualan')
        ->as('detailPenjualan.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::delete('hapus/{id}', 'hapusDetailPenjualan')->name('destroy');
        });

    Route::controller(DatabasePembelianController::class)
        ->prefix('pembelian')
        ->as('pembelian.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahPembelian')->name('add');
            Route::delete('hapus/{kode_transaksi}', 'hapusPembelian')->name('destroy');
        });

    Route::controller(DatabasePembelianDetailController::class)
        ->prefix('detailPembelian')
        ->as('detailPembelian.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('dataTable', 'dataTable')->name('dataTable');
            Route::delete('hapus/{id}', 'hapusDetailPembelian')->name('destroy');
        });
});
