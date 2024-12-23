<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\walletcontrolla;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/support', function () {
    return view('home.support');
});
Route::get('/mywallet', function () {
    return view('home.mywallet');
});

Route::get('/postdata', function () {
    return view('home.postdata');
});

Route::get('/ajax-loader.html', function () {
    return view('home.ajax-loader');
});
Route::get('/ajax-loader.html', function () {
    return view('ajax-loader');
});

Route::get('/form.php', function () {
    return view('home.form');
});

Route::post('/form/post', [walletcontrolla::class, 'postForm']);
Route::get('/forms/{form}', [walletcontrolla::class, 'destroy'])->name('delete');

Route::get('/dashboard', function () {
    return view('home.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
