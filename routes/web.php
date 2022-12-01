<?php

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/all-videos', 'HomeController@showVideos')->name('videos');
Route::get('/topic_details', 'HomeController@showTopic')->name('topic_details');
Route::get('/video_details', 'HomeController@showVideo')->name('video_details');
Route::get('/all-quizzes', 'HomeController@showQuizzes')->name('quizzes');
Route::get('/quiz_details', 'HomeController@showQuiz')->name('quiz_details');



Route::middleware(['guest:admin', 'guest:kid'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/kid/login', 'KidController@showLoginForm')->name('kid.login');
    Route::get('/kid/register', 'KidController@showRegisterForm')->name('kid.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/profile','AdminController@profile')->name('profile');
    Route::get('/settings','AdminController@settings')->name('settings');
    Route::get('/changePassword','AdminController@changePassword')->name('changePassword');
    Route::get('/logout','AdminController@logout')->name('logout');

    Route::prefix('/topics')->name('topic.')->group(function () {
        Route::get('/','TopicController@index')->name('index');
        Route::get('/create','TopicController@create')->name('create');
        Route::get('/edit','TopicController@edit')->name('edit');
        Route::get('/delete','TopicController@delete')->name('delete');
    });

    Route::prefix('/videos')->name('video.')->group(function () {
        Route::get('/','VideoController@index')->name('index');
        Route::get('/create','VideoController@create')->name('create');
        Route::get('/show','VideoController@show')->name('show');
        Route::get('/edit','VideoController@edit')->name('edit');
        Route::get('/delete','VideoController@delete')->name('delete');
    });

    Route::prefix('/quizzes')->name('quiz.')->group(function () {
        Route::get('/','QuizController@index')->name('index');
        Route::get('/create','QuizController@create')->name('create');
        Route::get('/edit','QuizController@edit')->name('edit');
        Route::get('/delete','QuizController@delete')->name('delete');
    });

    Route::prefix('/questions')->name('question.')->group(function () {
        Route::get('/','QuestionController@index')->name('index');
        Route::get('/create','QuestionController@create')->name('create');
        Route::get('/edit','QuestionController@edit')->name('edit');
        Route::get('/show','QuestionController@show')->name('show');
        Route::get('/delete','QuestionController@delete')->name('delete');
    });


});


Route::middleware(['auth:kid'])->name('kid.')->prefix('kid')->group(function () {
    Route::get('/profile','KidController@profile')->name('profile');
    Route::get('/tests','KidController@showTests')->name('tests');
    Route::get('/quiz_result', 'KidController@result')->name('quiz_result');
    Route::get('/settings','KidController@settings')->name('settings');
    Route::get('/changePassword','KidController@changePassword')->name('changePassword');
    Route::get('/logout','KidController@logout')->name('logout');
});
