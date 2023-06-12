<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
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
    return view('homepage');
})->name('home');

Route::get('/questions', [QuestionController::class, 'index'])->name('question');
Route::get('/detail-question/{question}', [QuestionController::class, 'show'])->name('question.show');

Route::get('/dashboard', function () {
    return to_route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/my-question', [QuestionController::class, 'index'])->name('myQuestion');
    Route::prefix('question')->name('question.')->group(function () {
        Route::controller(QuestionController::class)->group(function () {
            Route::get('/', 'create')->name('create');
            Route::post('/add', 'store')->name('add');
            Route::get('/edit/{question}', 'edit')->name('edit');
            Route::post('/edit/{question}', 'update')->name('update');
            Route::delete('/{question}', 'destroy')->name('destroy');
        });

        Route::post('/answer/{question}', [AnswerController::class, 'store'])->name('answer.add');
    });

});

require __DIR__ . '/auth.php';
