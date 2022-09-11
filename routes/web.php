<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AboutController as AdminAboutController;
use App\Http\Controllers\admin\ArticleController as AdminArticleController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PregnancyAlertController as AdminPregnancyAlertController;
use App\Http\Controllers\admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaUploaderController;
use App\Http\Controllers\PregnancyAlertController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ShortContentController;
use App\Http\Controllers\UserController;
use App\Mail\PregnancyAlertMail;
use App\Models\PregnancyAlert;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

Route::get('/testing', function() {
    dd(get_age_of_pregnancy('2021-09-30'));
});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/test_email', function() {
    $maxPregnancyAge = Carbon::now()->subDays(env('MAX_PREGNANCY_AGE', 42) * 7);
    // dd($maxPregnancyAge);
    dd(get_age_of_pregnancy(User::with('age_pregnancy')->whereHas('age_pregnancy', function(Builder $query) use ($maxPregnancyAge) {
        $query->where('pregnancy_start', '>=', $maxPregnancyAge->subDays(1));
    })->get()[0]->age_pregnancy->pregnancy_start));
    return view('emails.pregnancy_alert', [
        'user' => User::all()->first(),
        'alert' => PregnancyAlert::all()->first()
    ]);
});

require __DIR__ . '/auth.php';

Route::get('tentang', [AboutController::class, 'about'])->name('about.index');

Route::get('kontak', [AboutController::class, 'contact'])->name('contact.index');


Route::prefix('materi')->middleware('filledout.quiz')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/{article:slug}', [ArticleController::class, 'read'])->name('articles.read');
});

Route::prefix('pengingat-kehamilan')->middleware('auth')->group(function () {
    Route::get('/', [PregnancyAlertController::class, 'index'])->name('pregnancy.index');
    Route::get('/{id}', [PregnancyAlertController::class, 'read'])->name('pregnancy.read');
    Route::post('/{id}/done', [PregnancyAlertController::class, 'done'])->name('pregnancy.done');
});

Route::get('short_contents/{id}/read', [ShortContentController::class, 'read'])->name('short_content.read');

Route::get('email', [AboutController::class, 'sendEmail'])->name('send.email');

Route::prefix('evaluasi')->middleware('auth')->group(function () {
    Route::get('/', [QuestionController::class, 'evaluation'])->name('evaluation.index');
    Route::post('/submit', [QuestionController::class, 'evaluation_submit'])->name('evaluation.submit');
});

Route::prefix('quiz')->middleware('auth')->group(function () {
    Route::get('/', [QuestionController::class, 'quiz'])->name('quiz.index');
    Route::post('/submit', [QuestionController::class, 'quiz_submit'])->name('quiz.submit');
});

Route::post('/pregnancy_start/submit', [UserController::class, 'setPregnancyStart'])->name('pregnancy_start.submit');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('pregnancy')->group(function() {
        Route::get('/', [AdminPregnancyAlertController::class, 'index'])->name('admin.pregnancy_alerts');
        Route::prefix('list')->group(function() {
            Route::get('/', [AdminPregnancyAlertController::class, 'list'])->name('admin.pregnancy_alerts.list');
            Route::get('/create', [AdminPregnancyAlertController::class, 'create'])->name('admin.pregnancy_alerts.list.create');
            Route::post('/store', [AdminPregnancyAlertController::class, 'store'])->name('admin.pregnancy_alerts.list.store');
            Route::get('/{pregnancy_alert:id}/edit', [AdminPregnancyAlertController::class, 'edit'])->name('admin.pregnancy_alerts.list.edit');
            Route::put('/{pregnancy_alert:id}/update', [AdminPregnancyAlertController::class, 'update'])->name('admin.pregnancy_alerts.list.update');
            Route::get('/{pregnancy_alert:id}/destroy', [AdminPregnancyAlertController::class, 'destroy'])->name('admin.pregnancy_alerts.list.destroy');
        });
    });

    Route::prefix('articles')->group(function () {
        Route::get('/', [AdminArticleController::class, 'index'])->name('admin.articles');
        Route::get('/create', [AdminArticleController::class, 'create'])->name('admin.articles.create');
        Route::post('/store', [AdminArticleController::class, 'store'])->name('admin.articles.store');
        Route::get('/{article:slug}/edit', [AdminArticleController::class, 'edit'])->name('admin.articles.edit');
        Route::put('/{article:slug}/update', [AdminArticleController::class, 'update'])->name('admin.articles.update');
        Route::get('/{article:slug}/destroy', [AdminArticleController::class, 'destroy'])->name('admin.articles.destroy');
    });

    Route::prefix('questions')->group(function () {
        Route::prefix('quiz')->group(function () {
            Route::get('/', [AdminQuestionController::class, 'quiz'])->name('admin.quiz');
            Route::get('/show/{id}', [AdminQuestionController::class, 'quiz_show'])->name('admin.quiz.show');
        });

        Route::prefix('evaluation')->group(function () {
            Route::get('/', [AdminQuestionController::class, 'evaluation'])->name('admin.evaluation');
            Route::get('/show/{user_id}', [AdminQuestionController::class, 'evaluation_show'])->name('admin.evaluation.show');
        });
    });

    Route::get('users', [AdminUserController::class, 'index'])->name('admin.user');


    Route::prefix('about')->group(function () {
        Route::get('/', [AdminAboutController::class, 'about'])->name('admin.about');
        Route::put('/update', [AdminAboutController::class, 'update'])->name('admin.about.update');
    });

    Route::get('contact', [AdminAboutController::class, 'contact'])->name('admin.contact');

    Route::prefix('short_content')->group(function() {
        Route::get('/', [ShortContentController::class, 'index'])->name('admin.short_content');
        Route::get('/create', [ShortContentController::class, 'create'])->name('admin.short_content.create');
        Route::post('/store', [ShortContentController::class, 'store'])->name('admin.short_content.store');
        Route::get('/{short_content:id}/edit', [ShortContentController::class, 'edit'])->name('admin.short_content.edit');
        Route::put('/{short_content:id}/update', [ShortContentController::class, 'update'])->name('admin.short_content.update');
        Route::get('/{short_content:id}/delete', [ShortContentController::class, 'destroy'])->name('admin.short_content.destroy');
    });
});

Route::post('upload', [MediaUploaderController::class, 'upload']);
