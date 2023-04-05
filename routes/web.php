<?php

use App\Http\Controllers\ProfileController;
use App\Models\Video;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'videos' => Video::inRandomOrder()->get()
    ]);
})->name('home');
Route::get('/add-video', function () { return Inertia::render('AddVideo');})->name('addVideo');
Route::get('/delete-video', function () {
    return Inertia::render('DeleteVideo', [
        'videos' => Video::all()
    ]);
})->name('deleteVideo');

Route::get('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'show'])->name('videos.show');
Route::delete('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'destroy'])->name('videos.destroy');

require __DIR__.'/auth.php';
