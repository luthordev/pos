<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BillController;
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
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('sale', [SaleController::class, 'index'])->name('sale.index');
Route::post('sale/submit', [SaleController::class, 'submit'])->name('sale.submit');
Route::resources([
    'product' => ProductController::class,
    'supplier' => SupplierController::class,
    'bill' => BillController::class,
]);
route::get('product/add/{id}', [ProductController::class, 'add'])->name('product.add');
route::post('product/adding', [ProductController::class, 'addStock'])->name('product.addStock');
