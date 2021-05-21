<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DevoirsController;
use App\http\Controllers\ForumController;
use App\http\Controllers\ForumreponseController;
use App\http\Controllers\EvaluationController;
use App\http\Controllers\bulletinsController;
use App\http\Controllers\QCMController;
use App\http\Controllers\devoirEnligneController;
use App\http\Controllers\devoirEnclasseController;




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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/',[PagesController::class,'index']);
Route::get('/devoirs/ChoixDevoir',[DevoirsController::class,'Choice']);
Route::resource('/devoirEnligne',devoirEnligneController::class);
Route::resource('/devoirEnclasse',devoirEnclasseController::class);
Route::resource('/QCM',QCMController::class);
Route::resource('/devoirs',DevoirsController::class);
Route::resource('/cours',CoursController::class);
Route::resource('/Forum',ForumController::class);
Route::resource('/Forumreponse',ForumreponseController::class);
Route::resource('/Evaluation',EvaluationController::class);
Route::resource('/bulletins',bulletinsController::class);
Route::get('/reponses/{id}',[ForumController::class,'reponses'])->name('reponses');
Route::get('/Forumreponse/create/{id}', [ForumreponseController::class,'create'])->name('Forumreponse.create');
Route::get('/downloadcours/{id}', [PagesController::class,'downloadcours'])->name('downloadcours');
Route::get('/viewcours/{id}', [PagesController::class,'viewcours'])->name('viewcours');
Route::get('/downloaddevoirs/{id}', [PagesController::class,'downloaddevoirs'])->name('downloaddevoirs');
Route::get('/viewdevoirs/{id}', [PagesController::class,'viewdevoirs'])->name('viewdevoirs');






Auth::routes();
Route::get('/home', [\App\http\Controllers\HomeController::class, 'index' ])->name('home');