<?php

use App\Http\Controllers\ContactController;
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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get(
    '/contact/all', 
    [ContactController::class, 'getAllData']
)->name('contact-data');

Route::get(
    '/contact/all/{id}', 
    [ContactController::class, 'getData']
)->name('contact-message');

Route::get(
    '/contact/all/{id}/update', 
    [ContactController::class, 'updateData']
)->name('contact-update');

Route::get(
    '/contact/all/{id}/delete', 
    [ContactController::class, 'delete']
)->name('contact-delete');

Route::post(
    '/contact/all/{id}/update', 
    [ContactController::class, 'edit']
)->name('contact-form-edit');

Route::post(
    '/contact/submit', 
    [ContactController::class, 'submit']
)->name('contact-form');
