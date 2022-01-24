<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryViewController;
use App\Http\Controllers\Admin\Foodlist\FoodlistController;
use App\Http\Controllers\Admin\FoodlistSorting\FoodlistSortingController;
use App\Http\Controllers\Admin\FoodlistSorting\FoodlistSortingViewController;
use App\Http\Controllers\Admin\Foodlist\FoodlistViewController;
use App\Http\Controllers\Admin\News\NewsController;
use App\Http\Controllers\Admin\News\NewsViewController;
use App\Http\Controllers\Admin\Newsletter\NewsletterController;
use App\Http\Controllers\Admin\Newsletter\NewsletterViewController;
use App\Http\Controllers\Admin\Story\StoryController;
use App\Http\Controllers\Admin\Story\StoryViewController;
use App\Http\Controllers\Admin\Subscriber\SubscriberController;
use App\Http\Controllers\Admin\Subscriber\SubscriberViewController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontendViewController;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/linkstorage', function () {
//    Artisan::call('storage:link');
//});
//Route::get('/create-admin', [FrontendViewController::class, 'createAdminUser'])->name('createAdminUser');



Auth::routes(['register' => false]);
Route::get('/login', function() { return view('pages.frontend.login'); })->name('login');

Route::name('frontend.')->group(function() {

    Route::get('/', [FrontendViewController::class, 'index'])->name('index');
    Route::get('/foods', [FrontendViewController::class, 'foodlist'])->name('foodlist');
    Route::get('/impress', function() { return view('pages.frontend.impress'); })->name('impress');
    Route::get('/approach', function() { return view('pages.frontend.approach'); })->name('approach');
    Route::get('/privacy', function() { return view('pages.frontend.privacy'); })->name('privacy');;
    Route::get('/lang/{lang}', [FrontendController::class, 'setLocale'])->name('lang');
});

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(
    function() {
        Route::get('/', function() { return view('pages.admin.index'); })->name('index');

        Route::get('/signout', [LoginController::class, 'signout'])->name('signout');
        Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
        Route::get('/dev-create-user', [LoginController::class, 'createUser'])->name('createUser');

        Route::prefix('image')->name('image.')->group(function() {
            Route::get('/remove/{id?}', [Controller::class, 'removeImage'])->name('remove');
        });

        Route::prefix('newsletter')->name('newsletter.')->group(function() {

            Route::get('/create/{id?}', [NewsletterViewController::class, 'create'])->name('create');
            Route::get('/index', [NewsletterViewController::class, 'index'])->name('index');
            Route::get('/send', [NewsletterViewController::class, 'send'])->name('send');
            Route::get('/remove/{id?}', [NewsletterController::class, 'remove'])->name('remove');
            Route::post('/send', [NewsletterController::class, 'sendNewsletter'])->name('sendNewsletter');
            Route::post('/update', [NewsletterController::class, 'update'])->name('update');
        });

        Route::prefix('subscriber')->name('subscriber.')->group(function() {

            Route::get('/create/{id?}', [SubscriberViewController::class, 'create'])->name('create');
            Route::get('/index', [SubscriberViewController::class, 'index'])->name('index');
            Route::get('/remove/{id?}', [SubscriberController::class, 'remove'])->name('remove');
            Route::post('/update', [SubscriberController::class, 'update'])->name('update');
        });

        Route::prefix('foodlist')->name('foodlist.')->group(function() {

            Route::get('/create/{id?}', [FoodlistViewController::class, 'createFoodListEntry'])->name('create');
            Route::get('/index', [FoodlistViewController::class, 'foodListEntryIndex'])->name('index');


            Route::get('/remove/{id?}', [FoodlistController::class, 'removeFoodListEntry'])->name('remove');
            Route::post('/update', [FoodlistController::class, 'updateFoodListEntry'])->name('update');


            Route::prefix('category')->name('category.')->group(function() {
                Route::get('/create/{id?}', [FoodlistViewController::class, 'createCategory'])->name('create');
                Route::get('/index', [FoodlistViewController::class, 'categoriesIndex'])->name('index');
                Route::get('/remove/{id?}', [FoodlistController::class, 'removeCategory'])->name('remove');
                Route::post('/update/{id?}', [FoodlistViewController::class, 'updateCategory'])->name('update');
            });
            Route::prefix('extra')->name('extra.')->group(function() {
                Route::get('/create/{id?}', [FoodlistViewController::class, 'createFoodListExtra'])->name('create');
                Route::get('/index', [FoodlistViewController::class, 'foodListExtraIndex'])->name('index');
                Route::get('/remove/{id?}', [FoodlistController::class, 'removeFoodListExtra'])->name('remove');
                Route::post('/update/{id?}', [FoodlistViewController::class, 'updateFoodListExtra'])->name('update');
            });

            Route::prefix('sub-category')->name('sub-category.')->group(function() {
                Route::get('/create/{id?}', [FoodlistViewController::class, 'createSubCategory'])->name('create');
                Route::get('/index', [FoodlistViewController::class, 'subCategoriesIndex'])->name('index');
                Route::get('/remove/{id?}', [FoodlistController::class, 'removeSubCategory'])->name('remove');
                Route::post('/update/{id?}', [FoodlistViewController::class, 'updateSubCategory'])->name('update');
                Route::get('/get-by-id/{id?}', [FoodlistController::class, 'getSubCategoriesById'])->name('getById');
            });
        });

        Route::prefix('news')->name('news.')->group(function() {

            Route::get('/create/{id?}', [NewsViewController::class, 'create'])->name('create');
            Route::get('/index', [NewsViewController::class, 'index'])->name('index');
            Route::get('/remove/{id?}', [NewsController::class, 'remove'])->name('remove');
            Route::post('/update', [NewsController::class, 'update'])->name('update');
            Route::prefix('image')->name('image.')->group(function() {
                Route::get('/remove/{id?}', [NewsController::class, 'removeImage'])->name('remove');
            });
        });

        Route::prefix('story')->name('story.')->group(function() {

            Route::get('/create/{id?}', [StoryViewController::class, 'create'])->name('create');
            Route::get('/index', [StoryViewController::class, 'index'])->name('index');
            Route::get('/remove/{id?}', [StoryController::class, 'remove'])->name('remove');
            Route::post('/update', [StoryController::class, 'update'])->name('update');
        });
    });
