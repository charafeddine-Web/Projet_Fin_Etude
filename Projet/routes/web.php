<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\FiliereController;

use App\Http\Controllers\PageController;

use App\Http\Controllers\MessageController;


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
/*Route::get('/', function () {
    return view('login');
})->name('login');*/
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/About us', function () {
    return view('About');
})->name('About');






//contact
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');


//Authontification
Route::group(['middleware' => 'web'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
    Route::get('/login/{token?}', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
    Route::get('/password/reset/{token?}', [AuthController::class, 'showResetForm'])->name('password.reset');
    Route::put('/password/update', [AuthController::class, 'resetPassword'])->name('password.update');
});


//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/emploi', [UserController::class, 'emploi'])->name('emploi');
    Route::get('/userprofile', [UserController::class, 'userprofile'])->name('userprofile');
    Route::get('/userprofile/{id}', [UserController::class, 'edit'])->name('userprofile/edit');
    Route::put('/userprofile/{id}', [UserController::class, 'update'])->name('userprofile/update');

});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/Dashboard', [HomeAdminController::class, 'adminHome'])->name('admin/Dashboard');
    Route::get('/admin/Emploi', [HomeController::class, 'Emploi'])->name('admin/emploi');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/profile/{id}', [AdminController::class,'edit'])->name('admin/profile/edit');
    Route::put('/admin/profile/{id}', [AdminController::class,'update'])->name('admin/profile/update');


//Classes
    Route::get('/admin/classes', [ClasseController::class, 'index'])->name('admin/classes');
    Route::get('/admin/classes/Search', [ClasseController::class, 'searchClasse'])->name('SearchClasse');
    Route::get('/admin/classes/create', [ClasseController::class, 'create'])->name('admin/classes/create');
    Route::post('/admin/classes/store', [ClasseController::class, 'store'])->name('admin/classes/store');
    Route::get('/admin/classes/show/{id}', [ClasseController::class, 'show'])->name('admin/classes/show');
    Route::get('/admin/classes/edit/{id}', [ClasseController::class, 'edit'])->name('admin/classes/edit');
    Route::put('/admin/classes/edit/{id}', [ClasseController::class, 'update'])->name('admin/classes/update');
    Route::delete('/admin/classes/destroy/{id}', [ClasseController::class, 'destroy'])->name('admin/classes/destroy');
    Route::post('/admin/classes/importe', [ClasseController::class, 'importExcel'])->name('admin/classes/importExcel');


//salles

    Route::get('/admin/salles', [SalleController::class, 'index'])->name('admin/salles');
    Route::get('/admin/salles/Search', [SalleController::class, 'searchsalle'])->name('SearchSalle');
    Route::get('/admin/salles/create', [SalleController::class, 'create'])->name('admin/salles/create');
    Route::post('/admin/salles/store', [SalleController::class, 'store'])->name('admin/salles/store');
    Route::get('/admin/salles/show/{id}', [SalleController::class, 'show'])->name('admin/salles/show');
    Route::get('/admin/salles/edit/{id}', [SalleController::class, 'edit'])->name('admin/salles/edit');
    Route::put('/admin/salles/edit/{id}', [SalleController::class, 'update'])->name('admin/salles/update');
    Route::delete('/admin/salles/destroy/{id}', [SalleController::class, 'destroy'])->name('admin/salles/destroy');
    Route::post('/admin/salles/importe', [SalleController::class, 'importExcel'])->name('admin/salles/importExcel');

 
//Prof

    Route::get('/admin/professeurs', [ProfesseurController::class, 'index'])->name('admin/professeurs');
    Route::get('/admin/professeurs/Search', [ProfesseurController::class, 'searchprofesseur'])->name('SearchProfesseur');
    Route::get('/admin/professeurs/create', [ProfesseurController::class, 'create'])->name('admin/professeurs/create');
    Route::post('/admin/professeurs/store', [ProfesseurController::class, 'store'])->name('admin/professeurs/store');
    Route::get('/admin/professeurs/show/{id}', [ProfesseurController::class, 'show'])->name('admin/professeurs/show');
    Route::get('/admin/professeurs/edit/{id}', [ProfesseurController::class, 'edit'])->name('admin/professeurs/edit');
    Route::put('/admin/professeurs/edit/{id}', [ProfesseurController::class, 'update'])->name('admin/professeurs/update');
    Route::delete('/admin/professeurs/destroy/{id}', [ProfesseurController::class, 'destroy'])->name('admin/professeurs/destroy');
    Route::post('/admin/professeurs/importe', [ProfesseurController::class, 'importExcel'])->name('admin/professeurs/importExcel');

//Module

    Route::get('/admin/modules', [ModuleController::class, 'index'])->name('admin/modules');
    Route::get('/admin/modules/Search', [ModuleController::class, 'searchmodule'])->name('Searchmodule');
    Route::get('/admin/modules/create', [ModuleController::class, 'create'])->name('admin/modules/create');
    Route::post('/admin/modules/store', [ModuleController::class, 'store'])->name('admin/modules/store');
    Route::get('/admin/modules/show/{id}', [ModuleController::class, 'show'])->name('admin/modules/show');
    Route::get('/admin/modules/edit/{id}', [ModuleController::class, 'edit'])->name('admin/modules/edit');
    Route::put('/admin/modules/edit/{id}', [ModuleController::class, 'update'])->name('admin/modules/update');
    Route::delete('/admin/modules/destroy/{id}', [ModuleController::class, 'destroy'])->name('admin/modules/destroy');
    Route::post('/admin/modules/importe', [ModuleController::class, 'importExcel'])->name('admin/modules/importExcel');

//Filiere
    Route::get('/admin/filieres', [FiliereController::class, 'index'])->name('admin/filieres');
    Route::get('/admin/filieres/Search', [FiliereController::class, 'searchfiliere'])->name('Searchfiliere');
    Route::get('/admin/filieres/create', [FiliereController::class, 'create'])->name('admin/filieres/create');
    Route::post('/admin/filieres/store', [FiliereController::class, 'store'])->name('admin/filieres/store');
    Route::get('/admin/filieres/show/{id}', [FiliereController::class, 'show'])->name('admin/filieres/show');
    Route::get('/admin/filieres/edit/{id}', [FiliereController::class, 'edit'])->name('admin/filieres/edit');
    Route::put('/admin/filieres/edit/{id}', [FiliereController::class, 'update'])->name('admin/filieres/update');
    Route::delete('/admin/filieres/destroy/{id}', [FiliereController::class, 'destroy'])->name('admin/filieres/destroy');
    Route::post('/admin/filieres/importe', [FiliereController::class, 'importExcel'])->name('admin/filieres/importExcel');




    Route::post('/pages/save', [PageController::class, 'save'])->name('pages.save');
    Route::get('/pages/export', [PageController::class, 'export'])->name('pages.export');
        

// routes/web.php
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');

});




