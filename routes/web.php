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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendamentosController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/create', [HomeController::class, 'create']);

Route::get('/agendamento/{id}', [AgendamentosController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //return view('dashboard');
        return redirect('/');
    })->name('dashboard');
});
