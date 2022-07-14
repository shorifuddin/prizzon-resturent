<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\FeatureController;
use App\Http\Controllers\Website\specialController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\MenusController;
use App\Http\Controllers\Website\ChefController;
use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\ReservationController;
use App\Http\Controllers\Website\ManageController;
use GuzzleHttp\Middleware;

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
// <<===== WEBSITE ROUTE LIST ======>>
Route::get('/', [WebsiteController::class, 'index'])->name('/');
Route::get('reservation', [WebsiteController::class, 'reservation'])->name('reservation');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('menu', [WebsiteController::class, 'menu'])->name('menu');
Route::get('login', [WebsiteController::class, 'admin_login'])->name('login');
Route::get('/register', [WebsiteController::class, 'admin_register'])->name('register');
Route::post('/login', [WebsiteController::class, 'login_access'])->name('login_access');
Route::post('/register_access', [WebsiteController::class, 'register_access'])->name('register_access');
Route::get('/recycle', [WebsiteController::class, 'recycle'])->name('recycle');

// <<===== ADMIN ROUTE LIST ======>>
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/recycle', [AdminController::class, 'recycle'])->name('recycle');
Route::get('/logout', [AdminController::class, 'logout']);

// <<===== Dashboard ======>>
Route::group(['prefix' => 'dashboard'], function(){
// <<=====WEBSITE-FEATURE ROUTE LIST ======>>
    Route::group(['prefix' => 'feature'], function(){
        Route::get('all', [FeatureController::class, 'index'])->name('feature_all');
        Route::get('add', [FeatureController::class, 'add'])->name('feature_add');
        Route::post('submit', [FeatureController::class, 'insert'])->name('feature_submit');
        Route::post('update/{id}', [FeatureController::class, 'update'])->name('feature_update');
        Route::get('view/{id}', [FeatureController::class, 'view'])->name('feature_view');
        Route::get('edit/{id}', [FeatureController::class, 'edit'])->name('feature_edit');
        Route::get('softdelete/{id}', [FeatureController::class, 'softdelete'])->name('feature_softdelete');
        Route::get('restoredata', [FeatureController::class, 'restoredata'])->name('feature_restoredata');
        Route::get('restore/{id}', [FeatureController::class, 'restore'])->name('feature_restore');
        Route::get('delete/{id}', [FeatureController::class, 'delete'])->name('feature_delete');
    });
// <<=====WEBSITE-SPECIALITY ROUTE LIST ======>>
    Route::group(['prefix' => 'special'], function(){
        Route::get('all', [specialController::class, 'index'])->name('special_all');
        Route::get('add', [specialController::class, 'add'])->name('special_add');
        Route::post('submit', [specialController::class, 'insert'])->name('special_submit');
        Route::post('update/{id}', [specialController::class, 'update'])->name('special_update');
        Route::get('view/{id}', [specialController::class, 'view'])->name('special_view');
        Route::get('edit/{id}', [specialController::class, 'edit'])->name('special_edit');
        Route::get('softdelete/{id}', [specialController::class, 'softdelete'])->name('special_softdelete');
        Route::get('restoredata', [specialController::class, 'restoredata'])->name('special_restoredata');
        Route::get('restore/{id}', [specialController::class, 'restore'])->name('special_restore');
        Route::get('delete/{id}', [specialController::class, 'delete'])->name('special_delete');
    });
// <<=====WEBSITE-FOOD-CATEGORY ROUTE LIST ======>>
     Route::group(['prefix' => 'category'], function(){
        Route::get('all', [CategoryController::class, 'index'])->name('category_all');
        Route::get('add', [CategoryController::class, 'add'])->name('category_add');
        Route::post('submit', [CategoryController::class, 'insert'])->name('category_submit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('category_update');
        Route::get('view/{id}', [CategoryController::class, 'view'])->name('category_view');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
        Route::get('softdelete/{id}', [CategoryController::class, 'softdelete'])->name('category_softdelete');
        Route::get('restoredata', [CategoryController::class, 'restoredata'])->name('category_restoredata');
        Route::get('restore/{id}', [CategoryController::class, 'restore'])->name('category_restore');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('category_delete');
    });
// <<=====WEBSITE-FOOD-MENU ROUTE LIST ======>>
Route::group(['prefix' => 'menus'], function(){
    Route::get('all', [MenusController::class, 'index'])->name('menus_all');
    Route::get('add', [MenusController::class, 'add'])->name('menus_add');
    Route::post('submit', [MenusController::class, 'insert'])->name('menus_submit');
    Route::post('update/{id}', [MenusController::class, 'update'])->name('menus_update');
    Route::get('view/{id}', [MenusController::class, 'view'])->name('menus_view');
    Route::get('edit/{id}', [MenusController::class, 'edit'])->name('menus_edit');
    Route::get('softdelete/{id}', [MenusController::class, 'softdelete'])->name('menus_softdelete');
    Route::get('restoredata', [MenusController::class, 'restoredata'])->name('menus_restoredata');
    Route::get('restore/{id}', [MenusController::class, 'restore'])->name('menus_restore');
    Route::get('delete/{id}', [MenusController::class, 'delete'])->name('menus_delete');
});
// <<=====WEBSITE-CHEF ROUTE LIST ======>>
Route::group(['prefix' => 'chef'], function(){
    Route::get('all', [ChefController::class, 'index'])->name('chef_all');
    Route::get('add', [ChefController::class, 'add'])->name('chef_add');
    Route::post('submit', [ChefController::class, 'insert'])->name('chef_submit');
    Route::post('update/{id}', [ChefController::class, 'update'])->name('chef_update');
    Route::get('view/{id}', [ChefController::class, 'view'])->name('chef_view');
    Route::get('edit/{id}', [ChefController::class, 'edit'])->name('chef_edit');
    Route::get('softdelete/{id}', [ChefController::class, 'softdelete'])->name('chef_softdelete');
    Route::get('restoredata', [ChefController::class, 'restoredata'])->name('chef_restoredata');
    Route::get('restore/{id}', [ChefController::class, 'restore'])->name('chef_restore');
    Route::get('delete/{id}', [ChefController::class, 'delete'])->name('chef_delete');
});
// <<=====WEBSITE-EVENT ROUTE LIST ======>>
Route::group(['prefix' => 'event'], function(){
    Route::get('all', [EventController::class, 'index'])->name('event_all');
    Route::get('add', [EventController::class, 'add'])->name('event_add');
    Route::post('submit', [EventController::class, 'insert'])->name('event_submit');
    Route::post('update/{id}', [EventController::class, 'update'])->name('event_update');
    Route::get('view/{id}', [EventController::class, 'view'])->name('event_view');
    Route::get('edit/{id}', [EventController::class, 'edit'])->name('event_edit');
    Route::get('softdelete/{id}', [EventController::class, 'softdelete'])->name('event_softdelete');
    Route::get('restoredata', [EventController::class, 'restoredata'])->name('event_restoredata');
    Route::get('restore/{id}', [EventController::class, 'restore'])->name('event_restore');
    Route::get('delete/{id}', [EventController::class, 'delete'])->name('event_delete');
});
// <<=====WEBSITE-Reservation ROUTE LIST ======>>
Route::group(['prefix' => 'reservation'], function(){
    Route::get('pendding', [ReservationController::class, 'index'])->name('rtable_request');
    Route::get('approved', [ReservationController::class, 'approved'])->name('rtable_approved');
    Route::post('submit', [ReservationController::class, 'insert'])->name('rtable_submit');
    Route::post('update/{id}', [ReservationController::class, 'update'])->name('rtable_update');
    Route::get('view/{id}', [ReservationController::class, 'view'])->name('rtable_view');
    Route::get('edit/{id}', [ReservationController::class, 'edit'])->name('rtable_edit');
    Route::get('softdelete/{id}', [ReservationController::class, 'softdelete'])->name('rtable_softdelete');
    Route::get('restoredata', [ReservationController::class, 'restoredata'])->name('rtable_restoredata');
    Route::get('restore/{id}', [ReservationController::class, 'restore'])->name('rtable_restore');
    Route::get('delete/{id}', [ReservationController::class, 'delete'])->name('rtable_delete');
});
// <<=====WEBSITE-Reservation ROUTE LIST ======>>
// Route::get('manage/basic', [ManageController::class, 'basic'])->name('manage.basic.show');
// Route::POST('manage/update', [ManageController::class, 'update'])->name('manage.basic.update');

    Route::get('manage/contact', [ManageController::class, 'contact'])->name('contact_show');
    Route::POST('contact/update', [ManageController::class, 'contact_update'])->name('contact_update');

    Route::get('manage/social', [ManageController::class, 'social'])->name('social_show');
    Route::POST('social/update', [ManageController::class, 'social_update'])->name('social_update');
// <<===== USERCONTROLLER ROUTE LIST ======>>
    Route::group(['prefix' => 'user'], function(){
        Route::post('submit', [UserController::class, 'insert']);
        Route::post('update/{id}', [UserController::class, 'update'])->name('update');
        Route::get('add', [UserController::class, 'add'])->name('adduser');
        Route::get('all', [UserController::class, 'all'])->name('alluser')->middleware('superadmin');
        Route::get('view/{id}', [UserController::class, 'view'])->name('viewuser');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edituser');
        Route::get('softdelete/{id}', [UserController::class, 'softdelete'])->name('softdeleteuser');
        Route::get('restore', [UserController::class, 'restoredata'])->name('restoreuser');
        Route::get('restore/{id}', [UserController::class, 'restore'])->name('restore');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('deleteuser');
        Route::get('tb', [UserController::class, 'tb']);
    });
// <<===== ROLEROUTE LIST ======>>
    Route::group(['prefix' => 'role'], function(){
        Route::post('submit', [RoleController::class, 'insert'])->name('submit');
        Route::post('update', [RoleController::class, 'update']);
        Route::get('add', [RoleController::class, 'add'])->name('addrole');
        Route::get('all', [RoleController::class, 'all'])->name('allrole');
        Route::get('view/{id}', [RoleController::class, 'view'])->name('viewrole');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('editrole');

    });

});
require __DIR__.'/auth.php';
