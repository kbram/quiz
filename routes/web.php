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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/contactUs', function () {
    return view('pages.contactUs');
});
Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});
Route::get('/courses', function () {
    return view('pages.courses');
});
Route::get('/trainers', function () {
    return view('pages.trainers');
});
Route::get('/events', function () {
    return view('pages.events');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('Admin')->name('admin')->middleware('can:manage-users')->group(function(){
    Route::get('/test', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('test');
});
