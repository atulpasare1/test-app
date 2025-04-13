<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::middleware(['role:admin'])->group(function () {
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::get('/exams', [App\Http\Controllers\Admin\ExamsController::class, 'index']);
    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index']);
    Route::post('/users-list', [App\Http\Controllers\Admin\UsersController::class, 'userdatatable']);
    // quiz routes
    Route::get('/quiz', [App\Http\Controllers\Admin\QuizController::class, 'index'])->name('quiz');
    Route::get('/quiz/create', [App\Http\Controllers\Admin\QuizController::class, 'create'])->name('quiz.create');
    Route::get('/quiz/{quiz_id}/edit', [App\Http\Controllers\Admin\QuizController::class, 'quiz_edit'])->name('quiz.edit');
    Route::get('/quiz/{quiz_id}/settings', [App\Http\Controllers\Admin\QuizController::class, 'quiz_settings'])->name('quiz.settings');
    Route::post('/quiz/{quiz_id}/settings/submit', [App\Http\Controllers\Admin\QuizController::class, 'quiz_settings_submit'])->name('quiz.settings.submit');
    Route::get('/quiz/{quiz_id}/questions', [App\Http\Controllers\Admin\QuizController::class, 'quiz_questions'])->name('quiz.questions');
    Route::get('/quiz/{quiz_id}/schedules', [App\Http\Controllers\Admin\QuizController::class, 'quiz_schedules'])->name('quiz.schedules');
    Route::post('/quiz/submit', [App\Http\Controllers\Admin\QuizController::class, 'store'])->name('quiz.store');
    // Question routes
    Route::get('/question', [App\Http\Controllers\Admin\QuestionController::class, 'index'])->name('question');
    Route::get('/question/create', [App\Http\Controllers\Admin\QuestionController::class, 'create'])->name('question.create');
    Route::get('/question/search', [App\Http\Controllers\Admin\QuestionController::class, 'search'])->name('question.search');
    // Route::get('/question/{question_id}/edit', [App\Http\Controllers\Admin\QuestionController::class, 'question_edit'])->name('question.edit');
    // Route::get('/question/{question_id}/settings', [App\Http\Controllers\Admin\QuestionController::class, 'question_settings'])->name('question.settings');
    // Route::get('/question/{question_id}/questions', [App\Http\Controllers\Admin\QuestionController::class, 'question_questions'])->name('question.questions');
    // Route::get('/question/{question_id}/schedules', [App\Http\Controllers\Admin\QuestionController::class, 'question_schedules'])->name('question.schedules');
    // Route::post('/question/submit', [App\Http\Controllers\Admin\QuestionController::class, 'store'])->name('question.store');




    //ajax route
    Route::post('/quiz/get-lessions-by-subjects', [App\Http\Controllers\Admin\QuizController::class, 'get_lessions_by_subjects'])->name('get.lessions.by.subjects');


    // Category routes
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
    Route::post('/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/{category_id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categories.update');
    Route::post('/categories/{category_id}/delete', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categories.delete');

    Route::get('/openai', [App\Http\Controllers\OpenAIController::class, 'generate']);
});

// Teacher Routes
Route::middleware(['role:teacher'])->group(function () {

    Route::get('/home', [App\Http\Controllers\Teacher\DashboardController::class, 'index']);
});

// Student Routes
Route::middleware(['role:student'])->group(function () {
    Route::get('/student/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'index']);
});
