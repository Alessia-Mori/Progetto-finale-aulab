<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create')->middleware('auth');

Route::get('/lista/annunci', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');


Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::get('/ricerca/annuncio', [PublicController::class, 'seacrhAnnoncements'])-> name('announcements.search');

Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

Route::get('/lavoraConNoi', [RevisorController::class, 'workWithUs'])->name('workWithUs')->middleware('auth');

Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// Route::post('/get/data', [RevisorController::class, 'getData'])->middleware('auth')->name('get.data');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor')->middleware('auth');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');

