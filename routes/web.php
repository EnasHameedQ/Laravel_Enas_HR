<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

Route::get('/', function () {
  return view('admin.layout.master');
});



Route::group([
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {



  Route::get('/create_user', [AuthController::class, 'createUser'])->name('create_user');
  Route::post('/save_user', [AuthController::class, 'register'])->name('save_user');

  Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');

  Route::get('/show_all_users', [AuthController::class, 'listAll'])->name("show_users");
  Route::get('/new_category', [CategoriesController::class, 'create'])->name('new_category');

  Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
});




Route::group(['middleware' => 'auth'], function () {
  Route::group(['middleware' => 'role:admin|super_admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'adminDash'])->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'adminDash'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'adminDash'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'adminDash'])->name('dashboard');
  });

  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::post('/do_login', [AuthController::class, 'login'])->name('do_login');


Route::get('/create_user', [AuthController::class, 'createUser'])->name('create_user');
Route::post('/save_user', [AuthController::class, 'register'])->name('save_user');
Route::get('/show_all_users', [AuthController::class, 'listAll'])->name("show_users");

Route::get('/create_compony', [AuthController::class, 'create_compony'])->name('create_compony');
Route::post('/save_compony', [AuthController::class, 'save_compony'])->name('save_compony');
Route::get('/show_all_componies', [AuthController::class, 'listAll'])->name("show_componies");

Route::get('/create_job', [AuthController::class, 'create_job'])->name('create_job');
Route::post('/save_compony', [AuthController::class, 'save_job'])->name('save_job');
Route::get('/show_all_job', [AuthController::class, 'listAll'])->name("show_job");

Route::get('/create_add', [AuthController::class, 'create_add'])->name('create_job');
Route::post('/save_add', [AuthController::class, 'save_add'])->name('save_job');
Route::get('/show_all_add', [AuthController::class, 'listAll'])->name("show_job");

Route::get('/create_job', [AuthController::class, 'create_job'])->name('create_job');
Route::post('/save_compony', [AuthController::class, 'save_job'])->name('save_job');
Route::get('/show_all_job', [AuthController::class, 'listAll'])->name
("show_job");


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');

Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [NewPasswordController::class, 'reset']);
Route::get('/generate_roles', [SettingsController::class, 'generateRoles'])->name('generate_roles');
//end  admin pages
// start dashbord pages
Route::get('/main-dashboard', [User_profile::class, 'dashboard'])->name('main-dashboard');
Route::get('/experiences', [User_profile::class, 'show_experience'])->name('experiences');
Route::get('/courses', [User_profile::class, 'show_courses'])->name('courses');
Route::get('/qualifiction', [User_profile::class, 'show_qualifiction'])->name('qualifiction');
Route::get('/my_cv', [User_profile::class, 'show_cv'])->name('my_cv');
Route::get('/skills', [User_profile::class, 'show_skills'])->name('skills');

//  end dashbord pages



