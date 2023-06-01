<?php

use App\Http\Controllers\ContactController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/show/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('/edit/{contact}', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/update/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/delete/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

require __DIR__.'/auth.php';
