<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Admin\SuperAdminPostController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// frontend
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('frontend.index');
});

// middleware
Route::middleware(['auth', 'role:admin'])->group(function(){
    // admin cotroller
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'Admin_dashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'Admin_logout')->name('admin.logout');
    });

    //post controller
    Route::controller(PostController::class)->group(function(){
        Route::get('/admin/post', 'index')->name('admin.index');

        Route::post('/admin/add-post', 'Store')->name('admin.addpost');
        Route::get('/admin/all-post', 'Show')->name('admin.allpost');

        Route::get('/admin/edit-post/{id}', 'EditPost')->name('admin.edit_post');
        Route::post('/admin/update-post/{id}', 'UpdatePost')->name('updatePost');
        Route::get('/admin/delete-post/{id}', 'DeletePost')->name('delete_post');
    });
});

// admin login page showwithout middleware
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/login', 'Admin_login')->name('admin.login');
    // Route::get('/admin/register', 'Admin_register')->name('admin.register');
});

Route::middleware(['auth', 'role:superadmin'])->group(function(){
    // admin cotroller
    Route::controller(SuperAdminController::class)->group(function(){
        Route::get('/superadmin/dashboard', 'SuperAdmin_dashboard')->name('superadmin.dashboard');
        Route::get('/superadmin/logout', 'SuperAdmin_logout')->name('superadmin.logout');
        
    });

    Route::controller(SuperAdminPostController::class)->group(function(){
        Route::get('/superadmin/all-post', 'ShowPost')->name('superadmin.allPost');
        Route::get('/superadmin/aprove/{id}', 'Approve')->name('aprove');
        Route::get('/superadmin/reject/{id}', 'Reject')->name('reject');
    });
});

// superadmin login page showwithout middleware
Route::controller(SuperAdminController::class)->group(function(){
    Route::get('/superadmin/login', 'SuperAdmin_login')->name('sunerAdmin.login');
    // Route::get('/admin/register', 'Admin_register')->name('admin.register');
});







require __DIR__.'/auth.php';
