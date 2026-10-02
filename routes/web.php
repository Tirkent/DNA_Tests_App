<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [Usercontroller::class, 'register']);
Route::post('logout', [Usercontroller::class, 'logout']);
Route::post('/login', [Usercontroller::class, 'login']);
Route::post('/topicsadd', [TopicController::class, 'topicsadd']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/topics', function () {
    return view('topics');
});
Route::get('/tests', function () {
    return view('tests');
});
