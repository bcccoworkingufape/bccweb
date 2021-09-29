<?php
namespace App\Http\Controllers;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/documentos', [DocumentsController::class, 'index'])->name('documents');
Route::get('/curso', function(){return view("course");})->name('course.index');
Route::get('/ensino-remoto', [RemoteClassesController::class, 'index'])->name('remote');
Route::get('/professores',[TeachersController::class,'index'])->name('teachers.index');
Route::get('/professores/{id}',[TeachersController::class,'show'])->name('teachers.show');
Route::get('/noticias',[NewsController::class,'index'])->name('news.index');
Route::get('/noticias/{id}',[NewsController::class,'show'])->name('news.show');
Route::get('/grupos-de-pesquisa', [ResearchGroupsController::class, 'index'])->name('researchGroups.index');
Route::get('/midia', [MediaController::class, 'index'])->name('media.index');
Route::get('/laboratorios',[LabsController::class, 'index'])->name('labs.index');
Route::get('/laboratorios-bcc',[LabsController::class, 'show'])->name('labs.show');
Route::get('/projetos', [ProjectsController::class, 'index'])->name('projects.index');
