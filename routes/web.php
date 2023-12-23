<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResearchersController;
use App\Http\Controllers\DissertationsController;
use App\Http\Controllers\FacultyBooksController;
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

Route::get('/', [HomeController::class,'index'])->name('welcome');
Route::get('/dissertations', [HomeController::class,'dissertations'])->name('dissertations_user');
Route::get('/photogallery', [HomeController::class,'photos'])->name('photos_user');
Route::get('/oav', [HomeController::class,'oav'])->name('oav_user');
Route::get('/contact', [HomeController::class,'contact'])->name('contact_user');


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
    Route::resource('/centers', CenterController::class);
    Route::resource('/dissertations', DissertationsController::class);
    Route::resource('/researchers', ResearchersController::class);
    Route::resource('/carousels', CarouselsController::class);

    /****************** FACULTYBOOKSS **********************************************************************************/
    Route::get('/dashboard/facultybooks', [FacultyBooksController::class, 'index'])->name('facultybooks');
    Route::get('/dashboard/facultybooks/create', [FacultyBooksController::class, 'create'])->name('facultybooks.create');
    Route::post('/dashboard/facultybooks/store', [FacultyBooksController::class, 'store'])->name('facultybooks.store');
    Route::get('/dashboard/facultybooks/{facultybook}/edit', [FacultyBooksController::class, 'edit'])->name('facultybooks.edit');
    Route::delete('/dashboard/facultybooks/{facultyBook}', [FacultyBooksController::class, 'destroy'])->name('facultybooks.delete');
    Route::put('/dashboard/facultybooks/{facultyBook}', [FacultyBooksController::class, 'update'])->name('facultybooks.update');

});


require __DIR__.'/auth.php';
