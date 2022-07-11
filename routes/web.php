<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PregnancyAlertController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard')->middleware('admin');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::get('tentang', [AboutController::class, 'about'])->name('about.index');

Route::get('kontak', [AboutController::class, 'contact'])->name('contact.index');


Route::prefix('materi')->middleware('filledout.quiz')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/{article:slug}', [ArticleController::class, 'read'])->name('articles.read');
});

Route::prefix('pengingat-kehamilan')->middleware('auth')->group(function() {
    Route::get('/', [PregnancyAlertController::class, 'index'])->name('pregnancy.index');
    Route::get('/{id}', [PregnancyAlertController::class, 'read'])->name('pregnancy.read');
    Route::post('/{id}/done', [PregnancyAlertController::class, 'done'])->name('pregnancy.done');
});

Route::get('email', [AboutController::class, 'sendEmail'])->name('send.email');

Route::prefix('evaluasi')->group(function() {
    Route::get('/', [QuestionController::class, 'evaluation'])->name('evaluation.index');
    Route::post('/submit', [QuestionController::class, 'evaluation_submit'])->name('evaluation.submit');
});

Route::prefix('quiz')->group(function() {
    Route::get('/', [QuestionController::class, 'quiz'])->name('quiz.index');
    Route::post('/submit', [QuestionController::class, 'quiz_submit'])->name('quiz.submit');
});

Route::post('/pregnancy_start/submit', [UserController::class, 'setPregnancyStart'])->name('pregnancy_start.submit');