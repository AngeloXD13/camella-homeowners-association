<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\BODMembersController;
use App\Http\Controllers\Admin_LoginController;
use App\Http\Controllers\BOD_LoginController;
use App\Http\Controllers\M_AnnouncementsController;
use App\Http\Controllers\M_Information_Content_Controller;


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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/home', [HomepageController::class,'index'])->name('home');

Route::get('/admin', [Admin_LoginController::class, 'index'])->name('login');
Route::post('/admin/validate_login', [Admin_LoginController::class, 'validate_login'])->name('adminpanel.validate_login');

Route::controller(Admin_LoginController::class)->middleware(['auth:admin'])->group(function () {

    // Route::get('/admin', 'index')->name('login');
    // Route::post('adminpanel/validate_login', 'validate_login')->name('adminpanel.validate_login');

    //Route::get('adminpanel/dashboard', 'dashboard')->name('dashboard');
    Route::get('adminpanel/logout', 'logout')->name('logout');
    Route::get('adminpanel/dashboard', 'dashboard')->name('adminDashboard');

    // Route::resource('adminpanel/adminuser', AdminUsersController::class)->middleware(['auth']);;
    //Route::resource('adminpanel/bodmember', BODMembersController::class)->middleware(['auth']);;

    Route::resource('adminpanel/adminuser', AdminUsersController::class);
    Route::resource('adminpanel/bodmember', BODMembersController::class);

    Route::get('adminpanel/bodmember/bodrole/{bodmember}/edit', [BODMembersController::class, 'edit_role'])->name('bodmember.edit_role');
    Route::put('adminpanel/bodmember/bodrole/{bodmember}/edit', [BODMembersController::class, 'update_role'])->name('bodmember.update_role');
});

// Route::resource('adminpanel/adminuser', AdminUsersController::class);
// Route::resource('adminpanel/bodmember', BODMembersController::class);

// Route::get('adminpanel/bodmember/bodrole/{bodmember}/edit', [BODMembersController::class,'edit_role' ])->name('bodmember.edit_role');
// Route::put('adminpanel/bodmember/bodrole/{bodmember}/edit', [BODMembersController::class,'update_role' ])->name('bodmember.update_role');

//------------------------------BOD------------------------------------------------

Route::get('/bod', [BOD_LoginController::class, 'index'])->name('login_bod');
Route::post('/bod/validate_login', [BOD_LoginController::class, 'validate_login'])->name('bodpanel.validate_login');

Route::controller(BOD_LoginController::class)->middleware(['auth:bod'])->group(function () {

    Route::get('bodpanel/logout', 'logout')->name('logout_bod');
    Route::get('bodpanel/dashboard', 'dashboard')->name('bodDashboard');
  
    // m_announcements
    Route::resource('bodpanel/m_announcement', M_AnnouncementsController::class);
    Route::post('bodpanel/m_announcement/upload', [M_AnnouncementsController::class, 'store_files'])->name('upload');
    Route::post('bodpanel/m_announcement/{m_announcement}', [M_AnnouncementsController::class, 'destroy'])->name('m_announcement.destroy');
    Route::post('bodpanel/m_announcement/{m_announcement}', [M_AnnouncementsController::class, 'update'])->name('m_announcement.update');
    
    // m_infos
    Route::resource('bodpanel/m_information', M_Information_Content_Controller::class);
    Route::post('bodpanel/m_information/{m_information}', [M_Information_Content_Controller::class, 'destroy'])->name('m_information.destroy');
    Route::post('bodpanel/m_information/{m_information}', [M_Information_Content_Controller::class, 'update'])->name('m_information.update');
    
    //
    Route::get('bodpanel/m_information/create', [M_Information_Content_Controller::class, 'create'])->name('m_information.create');
    Route::get('bodpanel/m_information/createbod/', [M_Information_Content_Controller::class, 'createbod'])->name('m_information.createbod');
    
    Route::get('bodpanel/m_information/', [M_Information_Content_Controller::class, 'index'])->name('m_information.index');
    Route::get('bodpanel/m_information/{m_information}/edit_bod', [M_Information_Content_Controller::class, 'edit'])->name('m_information.edit_bod');
    Route::get('bodpanel/m_information/{m_information}', [M_Information_Content_Controller::class, 'show'])->name('m_information.show');
});
