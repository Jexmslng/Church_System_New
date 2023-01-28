<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ChartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichuse
| contains the "web" middleware group. Now create something great!
|
*/


/* Homepage */
Route::get('/', function () { return view('welcome');});
Route::get('/aboutus', function () { return view('aboutus');});
Route::get('/events', [EventController::class, 'events'])->name('events');

/* Login */
Route::get('/login', function () { return view('home');});
Route::get('/signup', function () { return view('forms/signup');});

/* Admin Event*/
Route::get('/admindashboard', function () { return view('admin/admindashboard');});
Route::get('/adminevent/create', [EventController::class, 'create'])->name('adminevent.create');
Route::post('/adminevent', [EventController::class, 'store'])->name('adminevent.store');
Route::get('/post/show/{id}', [EventController::class, 'show'])->name('post.show');
Route::get('/adminevent', function () { return view('admin/adminevent');});     
Route::get('/admineventshow', [EventController::class, 'admineventshow'])->name('admineventshow');
Route::delete('/admineventshow/delete/{id}', [EventController::class, 'destroy'])->name('admineventshow.delete');
Route::post('/admineventedit/update/{id}', [EventController::class, 'update'])->name('admineventedit.update');
Route::get('/admin/admineventedit/{id}', [EventController::class, 'admineventshowid'])->name('admin.admineventedit');


Route::get('/admineventchart', [ChartController::class, 'index'])->name('admin.admineventchart');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
