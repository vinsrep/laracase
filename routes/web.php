<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::prefix('/medicine')->name('medicine.')->group(function(){
    Route::get('/create', [MedicineController::class, 'create'])->name('create');
    Route::post('/store', [MedicineController::class, 'store'])->name('store');
    Route::get('/', [MedicineController::class, 'index'])->name('home');
    Route::get('/home', [MedicineController::class, 'home'])->name('index');
    Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
    Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
    Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
    Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
    Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
});

Route::prefix('/student')->name('student.')->group(function(){
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::get('/', [StudentController::class, 'index'])->name('home');
    Route::get('/home', [StudentController::class, 'home'])->name('index');
    Route::get('/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('delete');
    Route::get('/data/role', [StudentController::class, 'role'])->name('role');
    Route::get('/data/role/{id}', [StudentController::class, 'roleEdit'])->name('role.edit');
    Route::patch('/data/role/{id}', [StudentController::class, 'roleUpdate'])->name('role.update');
});


