<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TdController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\View;

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

Route::get('coursShow', function () {
    return view('coursShow');
})->middleware('profIsLoggedIn');
Route::get('td', function () {
    return view('td');
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
Route::get('/listeModule', function () {
    return  view('Admin.module.listeModule');
});


Route::get('/test', function () {
    return view('/test');
})->middleware('profIsLoggedIn');


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
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/cours', function () {
    return view('/cours');

})->middleware('isLoggedIn');

/*_---------------Forgot_Password------*/
Route::get('forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class,'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');

/////////change password Student////////
Route::get('/changePassword',[StudentController::class,'showChangePasswordForm'])->middleware('isLoggedIn');
Route::post('/change-password', [StudentController::class, 'updatePassword'])->name('update-password')->middleware('isLoggedIn');

/////////change password Prof////////
Route::get('/changePassword-prof',[ProfController::class,'showChangePasswordFormProf'])->middleware('profIsLoggedIn');
Route::post('/change-password-prof', [ProfController::class, 'updatePasswordProf'])->name('update-password-prof')->middleware('profIsLoggedIn');




/* -----ADMIN routes------ */

Route::get('etudiantList', [StudentController::class, 'index'])->middleware('adminCheckLogin');
Route::get('ajouterEtudiant', [StudentController::class, 'ajouterEtd'])->middleware('adminCheckLogin');
Route::post('save-student', [StudentController::class, 'saveEtd'])->middleware('adminCheckLogin');
Route::get('editerEtudiant/{id}', [StudentController::class, 'modEtd'])->middleware('adminCheckLogin');
Route::post('enrgEtudiant/{id}', [StudentController::class, 'enrgEtd'])->middleware('adminCheckLogin');
//Route::get('deleteEtudiant/{id}', [StudentController::class, 'suppEtd']);
Route::post('deleteEtudiant', [StudentController::class, 'suppEtd'])->middleware('adminCheckLogin');

/************Admin conroll PROF********** */
Route::get('ListProf', [ProfController::class, 'indexPrf'])->middleware('adminCheckLogin');
Route::get('ajouterProf', [ProfController::class, 'ajouterPrf'])->middleware('adminCheckLogin');
Route::post('save-Prof', [ProfController::class, 'savePrf'])->middleware('adminCheckLogin');
Route::get('editerProf/{id}', [ProfController::class, 'modPrf'])->middleware('adminCheckLogin');
Route::post('enrgProf/{id}', [ProfController::class, 'enrgPrf']);
//Route::get('deletePof/{id}', [ProfController::class, 'suppProf']);
Route::post('deleteProf', [ProfController::class, 'suppPrf'])->middleware('adminCheckLogin');
/**********Admin Controll Module*******/
Route::get('ListeModule', [ModuleController::class, 'indexModule'])->middleware('adminCheckLogin');
Route::get('ajouterModule', [ModuleController::class, 'ajouterModule'])->middleware('adminCheckLogin');
Route::post('save-Module', [ModuleController::class, 'saveModule'])->middleware('adminCheckLogin');
Route::get('editerModule/{id}', [ModuleController::class, 'modModule'])->middleware('adminCheckLogin');
Route::post('enrgModule/{id}', [ModuleController::class, 'enrgModule'])->middleware('adminCheckLogin');
Route::post('deleteModule', [ModuleController::class, 'suppModule'])->middleware('adminCheckLogin');


//////////login student///////
Route::get('etud',[StudentController::class,'getLogin'])->name('getLogin')->middleware('alreadyLogged');
Route::post('etud',[StudentController::class,'postLogin'])->name('postLogin');



Route::get('dashboard',[StudentController::class,'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout',[StudentController::class,'logout'])->name('logout');


/*--------logInProof----------*/
Route::get('enseignant',[ProfController::class,'getLoginProf'])->name('getLoginProf')->middleware('profAlreadyLogged');
Route::post('enseignant',[ProfController::class,'postLoginProf'])->name('postLoginProf');
Route::get('DashboardProf',[ProfController::class,'DashboardProf'])->name('DashboardProf')->middleware('profIsLoggedIn');
Route::get('/logoutProf',[ProfController::class,'logoutProf']);

/********Admin LOgin*******/
Route::get('loginAdmin',[AdminController::class,'getLoginAdmin'])->name('getLoginAdmin')->middleware('adminAlreadyLogin');
Route::post('loginAdmin',[AdminController::class,'postLoginAdmin'])->name('postLoginAdmin');
Route::get('admin',[AdminController::class,'admin'])->name('admin')->middleware('adminCheckLogin');
Route::get('/logoutAdmin',[AdminController::class,'logoutAdmin']);

/*----------------ajouter Cours-----------*/

Route::post('savecours', [CoursController::class, 'savecours']);


Route::get('ajouterCours', [CoursController::class, 'ajouterCours']);
Route::get('editerCours/{id}', [CoursController::class, 'modCours'])->name('editerCours');
//Route::post('update-cours/{id}', [CoursController::class, 'enrgCours']);
//Route::get('deletePof/{id}', [CoursController::class, 'suppCours']);
Route::post('deleteCours', [CoursController::class, 'suppCours']);
//////////////////
Route::post('save-cours', [Courscontroller::class, 'savecours']);
Route::get('courslist', [Courscontroller::class, 'index']);

Route::get('/courslist', function () {
    return view('/test');
});

Route::post('enrgCours', [CoursController::class, 'enrgCou']);
Route::post('deleteCours', [CoursController::class, 'suppcour']);
Route::get('/download/{courpdf}', [CoursController::class, 'download']);
Route::get('/downloadTd/{tdpdf}', [TdController::class, 'downloadTd']);
Route::get('/downloadExam/{exampdf}', [ExamController::class, 'downloadExam']);
Route::get('/view/{id}', [CoursController::class, 'view']);
Route::get('/viewTd/{id}', [TdController::class, 'viewTd']);
Route::get('/viewExam/{id}', [ExamController::class, 'viewExam']);
/***testcours**** */


/////---------------
/*----------------------TD-----------------*/
Route::post('saveTd', [TdController::class, 'saveTd']);


Route::get('ajouterTd', [TdController::class, 'ajouterTd']);
Route::get('editerTd/{id}', [TdController::class, 'modTd'])->name('editerTd');
Route::post('update-Td/{id}', [TdController::class, 'enrgTd']);
//Route::get('deletePof/{id}', [TdController::class, 'suppTd']);
Route::post('deleteTd', [TdController::class, 'suppTd']);
Route::get('edit-td/{id}', [tdController::class, 'edit']);
Route::put('update-td/{id}', [tdController::class, 'update']);

/*-------------------Exam------------------*/
Route::post('saveExam', [ExamController::class, 'saveExam']);
Route::get('ajouterExam', [ExamController::class, 'ajouterExam']);
Route::get('editerExam/{id}', [ExamController::class, 'modExam'])->name('editerExam');
Route::post('update-Exam/{id}', [ExamController::class, 'enrgExam']);
//Route::get('deletePof/{id}', [ExamController::class, 'suppExam']);
Route::post('deleteExam', [ExamController::class, 'suppExam']);
Route::get('edit-exam/{id}', [ExamController::class, 'edit']);
Route::put('update-exam/{id}', [ExamController::class, 'update']);
//------------------------------



///////---------------Cours---------
Route::get('students', [CoursController::class, 'index']);
Route::get('add-student', [CoursController::class, 'create']);
Route::post('add-student', [CoursController::class, 'store']);
Route::get('edit-cours/{id}', [CoursController::class, 'edit']);
Route::put('update-cours/{id}', [CoursController::class, 'update']);
Route::delete('delete-student/{id}', [CoursController::class, 'destroy']);




