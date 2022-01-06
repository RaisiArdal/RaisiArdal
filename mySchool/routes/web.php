<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Ho
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*
*/
Route::prefix('Admin')->middleware('is_admin')->group(function() {
    Route::get('/aHome', [AdminController::class,'aHome'])->name('admin.home');
    Route::get('/home', [AdminController::class,'home'])->name('homeAdmin');
    Route::resource('/aCmt',AdminCommentController::class);
    Route::resource('/aCategory',AdminCategoriesController::class);
    Route::get('/cmtNP/{id}', [AdminCommentController::class, 'indexNewsPost'])->name('aCmtNP');
    Route::get('/cmtLk/{id}', [AdminCommentController::class, 'indexNewsLike'])->name('cmtLk');

    Route::resource('/aNP', NewsPostController::class);
    Route::post('/hNP/{id}', [NewsPostController::class,'hide'])->name('hNP');

});

Route::prefix('User')->middleware('is_user')->group(function() {
    Route::get('/uHome', [UserController::class,'userHome'])->name('user.home');


});

Route::resource('/cmt', CommentsController::class);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/nl', [HomeController::class, 'newsLike'])->name('newsLike');
Route::get('/np/{slug}', [HomeController::class, 'newsShow'])->name('newsShow');
Route::post('/nv/{id}', [HomeController::class, 'newsVisit'])->name('newsVisit');
Route::get('admin/home', [HomeController::class, 'adminHome']);
Route::get('student/home', [HomeController::class, 'studentHome']);
Route::get('teacher/home', [HomeController::class, 'teacherHome']);
Route::get('management/home', [HomeController::class, 'managementHome']);


Auth::routes();

