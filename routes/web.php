<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResearchersController;
use App\Http\Controllers\VideoController;
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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('admin.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/photos', PhotoController::class);
    Route::resource('/videos', VideoController::class);
    Route::resource('/abouts', AboutController::class);
});


/****************** RESEARCHERS **********************************************************************************/
Route::get('/dashboard/researchers', [ResearchersController::class, 'index'])->name('researchers');
Route::get('/dashboard/researchers/create', [ResearchersController::class, 'create'])->name('researchers.create');
Route::post('/dashboard/researchers/store', [ResearchersController::class, 'store'])->name('researchers.store');
Route::get('/dashboard/researchers/{researcher}/edit', [ResearchersController::class, 'edit'])->name('researchers.edit');
Route::delete('/dashboard/researchers/{researcher}', [ResearchersController::class, 'destroy'])->name('researchers.delete');
Route::put('/dashboard/researchers/{researcher}', [ResearchersController::class, 'update'])->name('researchers.update');

require __DIR__.'/auth.php';
