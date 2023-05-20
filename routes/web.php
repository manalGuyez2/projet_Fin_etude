<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ForgotPasswordController;
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

Route::get('/cours', function () {
    return view('/cours');

});
Route::get('/test', function () {
    return view('/test');

});
Route::get('/uml', function () {
    return view('/uml');

});
Route::get('/courEnsg', function () {
    return view('/courEnsg');

});
/* -------forgot------*/
Route::get('/etud', function () {
    return view('auth.login');
});
Route::get('forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class,'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');







/* -----ADMIN routes------ */
Route::get('etudiantList', [StudentController::class, 'index']);
Route::get('ajouterEtudiant', [StudentController::class, 'ajouterEtd']);
Route::post('save-student', [StudentController::class, 'saveEtd']);
Route::get('editerEtudiant/{id}', [StudentController::class, 'modEtd']);
Route::post('enrgEtudiant/{id}', [StudentController::class, 'enrgEtd']);
//Route::get('deleteEtudiant/{id}', [StudentController::class, 'suppEtd']);
Route::post('deleteEtudiant', [StudentController::class, 'suppEtd']);




Route::get('etud',[StudentController::class,'loginetd']);
Route::post('Login-etud',[StudentController::class,'loginEtud'])->name('Login-etud');
Route::get('dashboard',[StudentController::class,'dashboard']);