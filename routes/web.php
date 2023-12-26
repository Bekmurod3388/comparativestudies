<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ColleaguesController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\DissertationsController;
use App\Http\Controllers\FacultyBooksController;
use App\Http\Controllers\ResearcherBooksController;
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
Route::get('/contact', [HomeController::class,'contact'])->name('user_contact');

Route::get('user/gallery', [HomeController::class,'gallery'])->name('user_gallery');
Route::get('user/gallery/photos', [HomeController::class,'gallery_photos'])->name('user_gallery_photos');
Route::get('user/gallery/videos', [HomeController::class,'gallery_videos'])->name('user_gallery_videos');


Route::get('user/literature', [HomeController::class,'literature'])->name('user_literature');
Route::get('user/literature/textbooks', [HomeController::class,'literature_textbooks'])->name('user_literature_textbooks');
Route::get('user/literature/manuals', [HomeController::class,'literature_manuals'])->name('user_literature_manuals');
Route::get('user/literature/methodical', [HomeController::class,'literature_methodical'])->name('user_literature_methodical');

Route::get('user/scientific', [HomeController::class,'scientific_research'])->name('user_scientific_research');
Route::get('user/scientific/dissertations', [HomeController::class,'scientific_research_dissertations'])->name('user_scientific_research_dissertations');
Route::get('user/scientific/textbooks', [HomeController::class,'scientific_research_textbooks'])->name('user_scientific_research_textbooks');
Route::get('user/scientific/preparation', [HomeController::class,'scientific_research_preparation'])->name('user_scientific_research_preparation');

Route::get('user/about', [HomeController::class,'about'])->name('user_about');
Route::get('user/about/goals', [HomeController::class,'about_goals'])->name('user_about_goals');
Route::get('user/about/participants', [HomeController::class,'about_participants'])->name('user_about_participants');
Route::get('user/about/books', [HomeController::class,'about_books'])->name('user_about_books');
Route::get('user/about/articles', [HomeController::class,'about_articles'])->name('user_about_articles');
Route::get('user/about/oav', [HomeController::class,'about_oav'])->name('user_about_oav');


/* ADMIN PAGE ROUTES ********************************************************************************/


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
    Route::resource('/colleagues', ColleaguesController::class);
    Route::resource('/researcher', ResearcherController::class);
    Route::resource('/carousels', CarouselsController::class);
    Route::resource('/facultybooks', FacultyBooksController::class);
    Route::resource('/researcherbooks', ResearcherBooksController::class);
});


require __DIR__.'/auth.php';
