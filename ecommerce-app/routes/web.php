<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/generate-sso-token', function (\App\Services\SingleSignOnTokenService $service) {

    if (!auth()->check()) {
        return redirect('/login');
    }

    $token = $service->generateAccessToken(auth()->user());

    return redirect(
        config('services.foodpanda.url')
            . '/sso-login?token='
            . $token
    );
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
