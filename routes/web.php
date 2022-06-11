<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\Hint\HintController;
use App\Http\Controllers\Hint\ViewController;
use App\Http\Controllers\Hint\SendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


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

Auth::routes(['register' => false]);

Route::get(
    '/pronto',
    function () {
        return view('request.done');
    }
)->name('done');;

Route::get(
    '/',
    [GiftController::class, 'index']
)->name('gift.index');

Route::get(
    '/pesquisa',
    [GiftController::class, 'find']
)->name('gift.find');

Route::post(
    '/pesquisa/encontrar',
    [GiftController::class, 'search']
)->name('gift.search');

Route::get(
    '/pedido',
    [GiftController::class, 'create']
)->name('gift.create');

Route::post(
    '/pedido/salvar',
    [GiftController::class, 'store']
)->name('gift.store');

Route::get(
    '/home', 
    [HomeController::class, 'index']
)->name('home');

Route::get(
    '/dica',
    [HintController::class, 'index']
)->name('hint.index')->middleware('auth');

Route::get(
    '/dica/{code}',
    [HintController::class, 'create']
)->name('hint.create')->middleware('auth');

Route::post(
    '/dica/salvar',
    [HintController::class, 'store']
)->name('hint.store');

Route::get(
    '/dica/excluir/{hint}',
    [HintController::class, 'destroy']
)->name('hint.delete');

Route::get(
    '/dica/visualizar/{code}',
    [ViewController::class, 'show']
)->name('hint.view');

Route::get(
    '/dica/gostar/{code}',
    [ViewController::class, 'liked']
)->name('hint.liked');

Route::get(
    '/dica/enviar/{code}',
    [SendController::class, 'mail']
)->name('hint.send');