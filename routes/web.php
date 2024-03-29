<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ComentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\HomeController;

/*vewdsxdcfed
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'welcome']);
Route::get('/group', [SiteController::class, 'group']);
Route::get('/team', [SiteController::class, 'team']);
Route::get('/achievements', [SiteController::class, 'achievements']);
Route::get('/gallery', [SiteController::class, 'gallery']);
Route::get('/blog', [SiteController::class, 'blog']);

Route::post('/registers', [SiteController::class, 'registers'])->name('registers');
Route::post('/copmlants', [SiteController::class, 'copmlants'])->name('copmlants');


Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function () 
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('/infos', InfoController::class);
    Route::resource('/groups', GroupController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/coments', ComentController::class);
    Route::resource('/articles', ArticleController::class);

});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
