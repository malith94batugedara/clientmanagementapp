<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {

          Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

          Route::get('/clients', [ClientController::class, 'index'])->name('admin.client');

          Route::get('/addclients', [ClientController::class, 'create'])->name('admin.addclient');

          Route::post('/addclients', [ClientController::class, 'store'])->name('admin.addclient');

          Route::get('/edit-client/{client_id}', [ClientController::class, 'edit'])->name('admin.editclient');

          Route::put('/update-client/{client_id}', [ClientController::class, 'update'])->name('admin.updateclient');

          Route::post('/delete-client', [ClientController::class, 'delete'])->name('admin.deleteclient');
        
});