<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\ProfileController;
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

Route::get(
    '/done',
    function () {
        return view('done');
    }
)->name('done');;

Route::get(
    '/',
    [GiftController::class, 'create']
)->name('gift.create');

Route::post(
    '/gift/save',
    [GiftController::class, 'store']
)->name('gift.store');

Route::get(
    '/profile/{gift_id}',
    [ProfileController::class, 'create']
)->name('profile.create');

Route::post(
    '/profile/save',
    [ProfileController::class, 'store']
)->name('profile.store');

Route::get(
    '/contact/{gift_id}',
    [ContactController::class, 'create']
)->name('contact.create');

Route::post(
    '/contact/save',
    [ContactController::class, 'store']
)->name('contact.store');
