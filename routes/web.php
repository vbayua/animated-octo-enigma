<?php

use App\Models\Issue;
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
    return view('start');
})->name('home');

Route::get('start', function() {
    return view('start');
});

Route::get('login', function () {
    return view('login');
});

Route::get('capa', function () {
    return view('capa', [
        'temuan' => Issue::with(['user:id,name', 'category:id,name', 'status:id,name', 'level:id,name'])->get()
    ]);
});
