<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello-how-are-you', function () {
    return 'Hi there! How\'s it going?';
});
Route::get('/hello-how-are-you/{zahid}', function ($name) {
    return "Hi there! How's it going, $name?";
});
Route::get('/name/{zahid}/{rizky}', function ($firstname, $lastname) {
    return "I am $firstname $lastname";
});
Route::get('/home', [BiodataController::class, 'home']);
Route::get('/about', [BiodataController::class, 'about']);

Route::get('/web', [HomeController::class, 'index'])->name('home');

Route::get('/web/about', function () {
    return view('about');
})->name('about');

Route::get('/web/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/web/contact', [ContactController::class, 'submit'])->name('contact.sumbit');