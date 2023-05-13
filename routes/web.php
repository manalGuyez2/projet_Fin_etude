<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/', function () {
    return view('index');
});

Route::get('/etud', function () {
    return view('etud');
});

Route::get('/enseignant', function () {
    return view('enseignant');
});




Route::get('/modules', function () {
    return view('modules');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('Admin/adminAccueil');
});
Route::get('/etudiantList', function () {
    return view('Admin/ListEtud');
});









/* -----ADMIN routes------ */
Route::get('etudiantList', [StudentController::class, 'index']);
Route::get('ajouterEtudiant', [StudentController::class, 'ajouterEtd']);
Route::post('save-student', [StudentController::class, 'saveEtd']);
Route::get('editerEtudiant/{id}', [StudentController::class, 'modEtd']);
Route::post('enrgEtudiant/{id}', [StudentController::class, 'enrgEtd']);
Route::get('deleteEtudiant/{id}', [StudentController::class, 'suppEtd']);




Route::get('etud',[StudentController::class,'loginetd']);
Route::post('Login-etud',[StudentController::class,'loginEtud'])->name('Login-etud');
Route::get('dashboard',[StudentController::class,'dashboard']);