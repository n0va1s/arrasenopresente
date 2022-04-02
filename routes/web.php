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
    '/profile/{code}',
    [ProfileController::class, 'create']
)->name('profile.create');

Route::post(
    '/profile/save',
    [ProfileController::class, 'store']
)->name('profile.store');

Route::get(
    '/contact/{code}',
    [ContactController::class, 'create']
)->name('contact.create');

Route::post(
    '/contact/save',
    [ContactController::class, 'store']
)->name('contact.store');

Route::get(
    '/home', 
    [HomeController::class, 'index']
)->name('home');

Route::get(
    '/hint',
    [HintController::class, 'index']
)->name('hint.index')->middleware('auth');

Route::get(
    '/hint/{code}',
    [HintController::class, 'create']
)->name('hint.create')->middleware('auth');

Route::post(
    '/hint/save',
    [HintController::class, 'store']
)->name('hint.store');

Route::get(
    '/hint/delete/{hint}',
    [HintController::class, 'destroy']
)->name('hint.delete');

Route::get(
    '/hint/view/{code}',
    [ViewController::class, 'show']
)->name('hint.view');

Route::get(
    '/hint/mail/{code}',
    [SendController::class, 'mail']
)->name('hint.send');