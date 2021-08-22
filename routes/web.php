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

Route::get('/',[HomeController::class,'index']);
Route::get('/documentos', [DocumentsController::class, 'index']);
Route::get('/curso', function(){return view("course");});
Route::get('/ensino-remoto', [RemoteClassesController::class, 'index']);
Route::get('/template', function(){ return view("template");});
Route::get('/professores',[TeachersController::class,'index'])->name('teachers.index');
Route::get('/professores/{id}',[TeachersController::class,'show'])->name('teachers.show');
Route::get('/noticias',[NewsController::class,'index'])->name('news.index');
Route::get('/noticias/{id}',[NewsController::class,'show'])->name('news.show');
Route::get('/grupos-de-pesquisa', [ResearchGroupsController::class, 'index']);

