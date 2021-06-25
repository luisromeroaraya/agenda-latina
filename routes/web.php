<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddEventController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MyEventsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\CategoryEventController;
use App\Http\Controllers\ApiController;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/myevents', [MyEventsController::class, 'index'])->name('myevents');
    Route::delete('/dashboard/myevents/{event}', [MyEventsController::class, 'destroy'])->name('myevents.destroy');
    Route::get('/dashboard/myevents/{event}', [MyEventsController::class, 'edit'])->name('myevents.edit');
    Route::post('/dashboard/myevents/{event}', [MyEventsController::class, 'update'])->name('myevents.update');

    Route::get('/dashboard/addevent', [AddEventController::class, 'index'])->name('addevent');
    Route::post('/dashboard/addevent', [AddEventController::class, 'store'])->name('addevent.create');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/events/{event}', [EventsController::class, 'show'])->name('events.show');
Route::post('/events', [EventsController::class, 'search'])->name('events.search');

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::post('/articles', [ArticlesController::class, 'search'])->name('articles.search');

Route::get('/users/{user:username}/events', [UserEventController::class, 'index'])->name('users.events');

Route::get('/categories/{category:name}/events', [CategoryEventController::class, 'index'])->name('categories.events');

Route::get('/news', [ApiController::class, 'displayNews']);
Route::post('/sourceId', [ApiController::class, 'displayNews']);

require __DIR__.'/auth.php';