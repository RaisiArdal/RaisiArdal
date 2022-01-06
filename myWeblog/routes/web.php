<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SliderController;
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
Route::prefix('Admin')->middleware('is_admin')->group(function() {
    Route::get('/aHome', 'AdminController@aHome')->name('admin.home');
    Route::resource('/aCmt','AdminCommentController');
    Route::resource('/aCategory','AdminCategoriesController');
    Route::resource('/aSlider','SliderController');
    Route::get('/cmtNP/{id}', 'AdminCommentController@indexNewsPost')->name('aCmtNP');
    Route::get('/cmtLk/{id}', 'AdminCommentController@indexNewsLike')->name('cmtLk');

    Route::resource('/aNP', 'NewsPostController');
    Route::post('/hNP/{id}', 'NewsPostController@hide')->name('hNP');

});

Route::prefix('User')->middleware('is_user')->group(function() {
    Route::get('/uHome', 'UserController@userHome')->name('user.home');


});
Route::prefix('/')->group(function() {
    Route::resource('/cmt', 'CommentsController');
    Route::get('/', 'HomeController@home')->name('home');
    Route::post('/nl', 'HomeController@newsLike')->name('newsLike');
    Route::get('/np/{slug}', 'HomeController@newsShow')->name('newsShow');
    Route::post('/nv/{id}', 'HomeController@newsVisit')->name('newsVisit');
    Route::get('admin/home', 'HomeController@adminHome');
    Route::get('student/home', 'HomeController@studentHome');
    Route::get('teacher/home', 'HomeController@teacherHome');
    Route::get('management/home', 'HomeController@managementHome');
});
Auth::routes();

