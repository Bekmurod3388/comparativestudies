<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AbstractsController;
use App\Http\Controllers\AdminArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\ClientArticleController as ClientArticleControllerAlias;
use App\Http\Controllers\ComparativistScientistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConventionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MonographController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ColleaguesController;
use App\Http\Controllers\ResearcherArticlesController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\DissertationsController;
use App\Http\Controllers\FacultyBooksController;
use App\Http\Controllers\ResearcherBooksController;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\TrainingManualController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\JournalsControlller;
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

Route::middleware('auth')->group(function(){
Route::get('/', [HomeController::class,'index'])->name('welcome');
Route::get('/search', [HomeController::class,'home_search'])->name('home_search');
Route::get('/contact', [HomeController::class,'contact'])->name('user_contact');
Route::post('/contactpost', [HomeController::class,'contact_post'])->name('user_contact_post');

Route::get('user/gallery', [HomeController::class,'gallery'])->name('user_gallery');
Route::get('user/gallery/photos', [HomeController::class,'gallery_photos'])->name('user_gallery_photos');
Route::get('user/gallery/videos', [HomeController::class,'gallery_videos'])->name('user_gallery_videos');


Route::get('user/literature', [HomeController::class,'literature'])->name('user_literature');
Route::get('user/literature/textbooks', [HomeController::class,'literature_textbooks'])->name('user_literature_textbooks');
Route::get('user/literature/manuals', [HomeController::class,'literature_manuals'])->name('user_literature_manuals');
Route::get('user/literature/methodical', [HomeController::class,'literature_methodical'])->name('user_literature_methodical');

Route::get('user/magazines', [HomeController::class,'magazines'])->name('user_magazines');
Route::get('user/magazines/yevropa', [HomeController::class,'magazines_yevrope'])->name('user_magazines_yevropa');
Route::get('user/magazines/amerika', [HomeController::class,'magazines_amerika'])->name('user_magazines_amerika');
Route::get('user/magazines/turkiya', [HomeController::class,'magazines_turkiya'])->name('user_magazines_turkiya');
Route::get('user/magazines/rossiya', [HomeController::class,'magazines_rossiya'])->name('user_magazines_rossiya');
Route::get('user/magazines/markaziyosiyo', [HomeController::class,'magazines_central_asia'])->name('user_magazines_central_asia');

Route::get('user/scientific', [HomeController::class,'scientific_research'])->name('user_scientific_research');
Route::get('user/scientific/dissertations', [HomeController::class,'scientific_research_dissertations'])->name('user_scientific_research_dissertations');
Route::get('user/scientific/abstracts', [HomeController::class,'scientific_research_abstracts'])->name('user_scientific_research_abstracts');
Route::get('user/scientific/monographs', [HomeController::class,'scientific_research_monographs'])->name('user_scientific_research_monographs');
Route::get('user/scientific/articles', [HomeController::class,'scientific_research_articles'])->name('user_scientific_research_articles');
Route::get('user/scientific/scientists', [HomeController::class,'scientific_research_scientists'])->name('user_scientific_research_scientists');

Route::get('user/scientific/ikla', [HomeController::class,'ikla'])->name('user_scientific_research_ikla');
Route::get('user/scientific/akla', [HomeController::class,'akla'])->name('user_scientific_research_akla');

Route::get('/journal', [HomeController::class,'scientific_research_conventions'])->name('user_scientific_research_conventions');

Route::get('user/services', [HomeController::class,'services'])->name('user_services');
Route::get('user/services/exam_preparation', [HomeController::class,'services_exam_preparation'])->name('user_services_exam_preparation');
Route::get('user/services/teaching_research', [HomeController::class,'services_teaching_research'])->name('user_services_teaching_research');
Route::get('user/services/online_lecture', [HomeController::class,'services_online_lecture'])->name('user_services_online_lecture');

Route::get('user/about', [HomeController::class,'about'])->name('user_about');
Route::get('user/about/goals', [HomeController::class,'about_goals'])->name('user_about_goals');
Route::get('user/about/participants', [HomeController::class,'about_participants'])->name('user_about_participants');
Route::get('user/about/books', [HomeController::class,'about_books'])->name('user_about_books');
Route::get('user/about/articles', [HomeController::class,'about_articles'])->name('user_about_articles');
Route::get('user/about/oav', [HomeController::class,'about_oav'])->name('user_about_oav');
Route::get('/aboutThePlatform', [HomeController::class,'aboutThePlatform'])->name('aboutThePlatform');
Route::get('/archive', [HomeController::class,'archive'])->name('archive');
Route::get('/archive/{parent}', [HomeController::class,'parentArchive'])->name('parentArchive');
});

/* ADMIN PAGE ROUTES ********************************************************************************/


Route::get('/dashboard', function () {
    return view('admin.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/researcherbooks/{researcher}/add', [ResearcherBooksController::class, 'add'])->name('researcher.books.add');
    Route::post('/researcherbooks/{researcher}/store', [ResearcherBooksController::class, 'store'])->name('researcher.books.store');
    Route::delete('/researcherbooks/{book}/delete', [ResearcherBooksController::class, 'destroy'])->name('researcher.books.destroy');
    Route::get('/researcherbooks/{book}/edit', [ResearcherBooksController::class, 'edit'])->name('researcher.books.edit');
    Route::patch('/researcherbooks/{book}/update', [ResearcherBooksController::class, 'update'])->name('researcher.books.update');

    Route::get('/connections', [ContactController::class, 'index'])->name('connection.index');
    Route::delete('/connections/{connection}/delete', [ContactController::class, 'destroy'])->name('connection.destroy');
    Route::patch('/connections/{connection}/update', [ContactController::class, 'update'])->name('connection.update');

    Route::get('/adminarticles', [AdminArticlesController::class,'index'])->name('adminarticles.index');
    Route::get('/adminarticles/apply', [AdminArticlesController::class,'apply'])->name('adminarticles.apply');
    Route::get('/adminarticles/check', [AdminArticlesController::class,'check'])->name('adminarticles.check');
    Route::get('/adminarticles/reject', [AdminArticlesController::class,'reject'])->name('adminarticles.reject');
    Route::post('/adminarticles/{article}/update', [AdminArticlesController::class,'updatestatus'])->name('adminarticles.update');

//    conventions
    Route::get('/conventions/about', [ConventionsController::class,'about'])->name('conventions.about');
    Route::get('/conventions/about', [ConventionsController::class, 'about'])->name('conventions.about');
    Route::post('/conventions', [ConventionsController::class, 'store'])->name('conventions.store');
    Route::put('/conventions/{id}', [ConventionsController::class, 'update'])->name('conventions.update');
    Route::delete('/conventions/{id}', [ConventionsController::class, 'destroy'])->name('conventions.destroy');

    Route::get('/conventions/index', [ConventionsController::class, 'index'])->name('conventions.index');
    Route::post('/conventions/index', [ConventionsController::class, 'storeType1'])->name('conventions.type1.store');
    Route::put('/conventions/index/{id}', [ConventionsController::class, 'updateType1'])->name('conventions.type1.update');
    Route::delete('/conventions/index/{id}', [ConventionsController::class, 'destroyType1'])->name('conventions.type1.destroy');

    Route::post('/conventions/{convention}/children', [ConventionsController::class, 'storeChild'])->name('conventions.children.store');
    Route::put('/conventions/children/{child}', [ConventionsController::class, 'updateChild'])->name('conventions.children.update');
    Route::delete('/conventions/children/{child}', [ConventionsController::class, 'destroyChild'])->name('conventions.children.destroy');

    Route::resource('/photos', PhotoController::class);
    Route::resource('/videos', VideoController::class);
    Route::resource('/abouts', AboutController::class);
    Route::resource('/centers', CenterController::class);
    Route::resource('/dissertations', DissertationsController::class);
    Route::resource('/colleagues', ColleaguesController::class);
    Route::resource('/researcher', ResearcherController::class);
    Route::resource('/carousels', CarouselsController::class);
    Route::resource('/facultybooks', FacultyBooksController::class);
    Route::resource('/journals', JournalsControlller::class);
    Route::resource('/locales', LocaleController::class);
    Route::resource('/articles', ArticlesController::class);
    Route::resource('/abstracts', AbstractsController::class);
    Route::resource('/researcherarticles', ResearcherArticlesController::class);
    Route::resource('/monographs', MonographController::class);
    Route::resource('/trainingmanuals', TrainingManualController::class);
    Route::resource('/comparativist-scientists', ComparativistScientistController::class);
    Route::resource('/textbooks', TextbookController::class);
//    for clients
    Route::resource('/clientarticles', ClientArticleControllerAlias::class);
});


require __DIR__.'/auth.php';
