<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfController;
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
Route::get('/loginAdmin', function () {
    return view('Admin.loginAdmin');
});

Route::get('/table', function () {
    return view('tables_dynamic');
});

Route::get('/contact', function () {
    return view('contact');
});

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


Route::get('/admin', function () {
    return view('Admin/adminAccueil');
});
Route::get('/etudiantList', function () {
    return view('Admin/ListEtud');

});
Route::get('/ListProf', function () {
    return  view('Admin.prof.ListProf');

});


Route::get('/test', function () {
    return view('/test');

})->middleware('moduleCheckLogin');

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


/*_---------------Forgot_Password------*/
Route::get('forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class,'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');

/////////Module////////
Route::get('modules',[StudentController::class,'mosules'])->name('modules');




/* -----ADMIN routes------ */
Route::get('etudiantList', [StudentController::class, 'index']);
Route::get('ajouterEtudiant', [StudentController::class, 'ajouterEtd']);
Route::post('save-student', [StudentController::class, 'saveEtd']);
Route::get('editerEtudiant/{id}', [StudentController::class, 'modEtd']);
Route::post('enrgEtudiant/{id}', [StudentController::class, 'enrgEtd']);
//Route::get('deleteEtudiant/{id}', [StudentController::class, 'suppEtd']);
Route::post('deleteEtudiant', [StudentController::class, 'suppEtd']);

/************Admin conroll PROF********** */
Route::get('ListProf', [ProfController::class, 'indexPrf']);
Route::get('ajouterProf', [ProfController::class, 'ajouterPrf']);
Route::post('save-Prof', [ProfController::class, 'savePrf']);
Route::get('editerProf/{id}', [ProfController::class, 'modPrf']);
Route::post('enrgProf/{id}', [ProfController::class, 'enrgPrf']);
//Route::get('deletePof/{id}', [ProfController::class, 'suppProf']);
Route::post('deleteProf', [ProfController::class, 'suppPrf']);

//////////login student///////
Route::get('etud',[StudentController::class,'getLogin'])->name('getLogin')->middleware('alreadyLogged');
Route::post('etud',[StudentController::class,'postLogin'])->name('postLogin');

Route::get('test',[ProfController::class,'test'])->name('test')->middleware('ModuleCheckLogin');

Route::get('dashboard',[StudentController::class,'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout',[StudentController::class,'logout'])->name('logout');


/*--------logInProo----------*/
Route::get('enseignant',[ProfController::class,'getLoginProf'])->name('getLoginProf')->middleware('profAlreadyLogged');
Route::post('enseignant',[ProfController::class,'postLoginProf'])->name('postLoginProf');
Route::get('courEnsg',[ProfController::class,'courEnsg'])->name('courEnsg')->middleware('profIsLoggedIn');
Route::get('/logoutProf',[ProfController::class,'logoutProf']);

/********Admin LOgin*******/
Route::get('loginAdmin',[AdminController::class,'getLoginAdmin'])->name('getLoginAdmin');

Route::post('loginAdmin',[AdminController::class,'postLoginAdmin'])->name('postLoginAdmin');
Route::get('admin',[AdminController::class,'admin'])->name('admin');
Route::get('/logoutAdmin',[AdminController::class,'logoutAdmin']);
