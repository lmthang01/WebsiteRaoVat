<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\Frontend\AuthController as FrontendAuthController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ProductDetailController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\VerifyAccountController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\ProfileController as UserProfileController;

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

// Login admin
Route::group(['namespace' => 'Backend', 'prefix' => 'auth'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('get_admin.login');
    Route::post('login', [AuthController::class, 'postLogin']);
});

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'check.login.admin'], function () {
    Route::get('', [BackendHomeController::class, 'index'])->name('get_admin.home');

    Route::get('logout', [AuthController::class, 'logout'])->name('get_admin.logout'); // Đăng xuất login

    // Category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', [CategoryController::class, 'index'])->name('get_admin.category.index')->middleware('permission:full|category_index');

        Route::get('create', [CategoryController::class, 'create'])->name('get_admin.category.create')->middleware('permission:full|category_create');
        Route::post('create', [CategoryController::class, 'store'])->name('get_admin.category.store')->middleware('permission:full|category_store');

        Route::get('update/{id}', [CategoryController::class, 'edit'])->name('get_admin.category.update')->middleware('permission:full|category_update');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('get_admin.category.update')->middleware('permission:full|category_update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('get_admin.category.delete')->middleware('permission:full|category_delete');
    });
    // slides
    Route::group(['prefix' => 'slide'], function () {
        Route::get('', [SlideController::class, 'index'])->name('get_admin.slide.index');

        Route::get('create', [SlideController::class, 'create'])->name('get_admin.slide.create');
        Route::post('create', [SlideController::class, 'store'])->name('get_admin.slide.store');

        Route::get('update/{id}', [SlideController::class, 'edit'])->name('get_admin.slide.update');
        Route::post('update/{id}', [SlideController::class, 'update'])->name('get_admin.slide.update');

        Route::get('delete/{id}', [SlideController::class, 'delete'])->name('get_admin.slide.delete');
    });
    // Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', [ProductController::class, 'index'])->name('get_admin.product.index')->middleware('permission:full|product_index');

        Route::get('create', [ProductController::class, 'create'])->name('get_admin.product.create')->middleware('permission:full|product_create');
        Route::post('create', [ProductController::class, 'store'])->name('get_admin.product.store')->middleware('permission:full|product_store');

        Route::get('update/{id}', [ProductController::class, 'edit'])->name('get_admin.product.update')->middleware('permission:full|product_update');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('get_admin.product.update')->middleware('permission:full|product_update');

        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('get_admin.product.delete')->middleware('permission:full|product_delete');
        Route::get('delete-image/{id}', [ProductController::class, 'deleteImage'])->name('get_admin.product.delete_image')->middleware('permission:full|product_delete_image');
    });
    //Locations
    Route::group(['prefix' => 'location'], function () {
        Route::get('district', [LocationController::class, 'district'])->name('get_admin.location.district');
        Route::get('ward', [LocationController::class, 'ward'])->name('get_admin.location.ward');
    });
    //Profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'index'])->name('get_admin.profile.index');
        Route::post('update/{id}',[ProfileController::class,'updateProfile'])->name('post_admin.profile.update');
        Route::get('update-password',[ProfileController::class,'updatePassword'])->name('get_admin.profile.update_password');
        Route::post('update-password/{id}',[ProfileController::class,'processUpdatePassword'])->name('post_admin.profile.update_password');

        // OTP update email
        Route::get('update-email',[ProfileController::class,'updateEmail'])->name('get_admin.profile.update_email');
        Route::post('update-email',[ProfileController::class,'processUpdateEmail']);
        Route::post('send-otp-email',[ProfileController::class,'sendOtpEmail']);


    });
    // User
    Route::group(['prefix' => 'user'], function () {
        Route::get('', [UserController::class, 'index'])->name('get_admin.user.index')->middleware('permission:full|user_index');

        Route::get('create', [UserController::class, 'create'])->name('get_admin.user.create')->middleware('permission:full|user_create');
        Route::post('create', [UserController::class, 'store'])->name('get_admin.user.store')->middleware('permission:full|user_store');

        Route::get('update/{id}', [UserController::class, 'edit'])->name('get_admin.user.update')->middleware('permission:full|user_update');
        Route::post('update/{id}', [UserController::class, 'update'])->name('get_admin.user.update')->middleware('permission:full|user_update');

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('get_admin.user.delete')->middleware('permission:full|user_delete');
    });

    // Menu
    Route::group(['prefix' => 'menu'], function () {
        Route::get('', [MenuController::class, 'index'])->name('get_admin.menu.index')->middleware('permission:full|menu_index');

        Route::get('create', [MenuController::class, 'create'])->name('get_admin.menu.create')->middleware('permission:full|menu_create');
        Route::post('create', [MenuController::class, 'store'])->name('get_admin.menu.store')->middleware('permission:full|menu_store');

        Route::get('update/{id}', [MenuController::class, 'edit'])->name('get_admin.menu.update')->middleware('permission:full|menu_update');
        Route::post('update/{id}', [MenuController::class, 'update'])->name('get_admin.menu.update')->middleware('permission:full|menu_update');

        Route::get('delete/{id}', [MenuController::class, 'delete'])->name('get_admin.menu.delete')->middleware('permission:full|menu_delete');
    });

     // Article
    Route::group(['prefix' => 'article'], function () {
        Route::get('', [ArticleController::class, 'index'])->name('get_admin.article.index')->middleware('permission:full|article_index');

        Route::get('create', [ArticleController::class, 'create'])->name('get_admin.article.create')->middleware('permission:full|article_create');
        Route::post('create', [ArticleController::class, 'store'])->name('get_admin.article.store')->middleware('permission:full|article_store');

        Route::get('update/{id}', [ArticleController::class, 'edit'])->name('get_admin.article.update')->middleware('permission:full|article_update');
        Route::post('update/{id}', [ArticleController::class, 'update'])->name('get_admin.article.update')->middleware('permission:full|article_update');

        Route::get('delete/{id}', [ArticleController::class, 'delete'])->name('get_admin.article.delete')->middleware('permission:full|article_delete');
    });


    //Permission
    Route::group(['prefix' => 'permission'], function () {
        Route::get('', [PermissionController::class, 'index'])->name('get_admin.permission.index');

        Route::get('create', [PermissionController::class, 'create'])->name('get_admin.permission.create');
        Route::post('create', [PermissionController::class, 'store'])->name('get_admin.permission.store');

        Route::get('update/{id}', [PermissionController::class, 'edit'])->name('get_admin.permission.update');
        Route::post('update/{id}', [PermissionController::class, 'update'])->name('get_admin.permission.update');

        Route::get('delete/{id}', [PermissionController::class, 'delete'])->name('get_admin.permission.delete');
    });

    //Role
    Route::group(['prefix' => 'role'], function () {
        Route::get('', [RoleController::class, 'index'])->name('get_admin.role.index');

        Route::get('create', [RoleController::class, 'create'])->name('get_admin.role.create');
        Route::post('create', [RoleController::class, 'store'])->name('get_admin.role.store');

        Route::get('update/{id}', [RoleController::class, 'edit'])->name('get_admin.role.update');
        Route::post('update/{id}', [RoleController::class, 'update'])->name('get_admin.role.update');

        Route::get('delete/{id}', [RoleController::class, 'delete'])->name('get_admin.role.delete');
    });
});

// Frontend User
Route::group(['namespace' => 'Fontend'], function () {
    Route::get('', [HomeController::class, 'index'])->name('get.home');

    Route::get('dang-nhap', [FrontendAuthController::class, 'login'])->name('get.login');
    Route::post('dang-nhap', [FrontendAuthController::class, 'postLogin']);

    Route::get('dang-xuat', [FrontendAuthController::class, 'logout'])->name('get.logout');

    Route::get('quen-mat-khau', [FrontendAuthController::class, 'restartPassword'])->name('get.restart_password');
    Route::post('quen-mat-khau', [FrontendAuthController::class, 'checkRestartPassword']);

    Route::get('mat-khau-moi', [FrontendAuthController::class, 'newPassword'])->name('get.new_password');
    Route::post('mat-khau-moi', [FrontendAuthController::class, 'processNewPassword']);

    Route::get('thong-bao-cap-mat-khau-moi', [FrontendAuthController::class, 'alertNewPassword'])->name('get.alert_new_password');


    Route::get('dang-ky', [FrontendAuthController::class, 'register'])->name('get.register');
    Route::post('dang-ky', [FrontendAuthController::class, 'postRegister']);

    Route::get('tim-kiem', [SearchController::class, 'index'])->name('get.search');

    Route::get('d/{slug}.html', [FrontendCategoryController::class, 'index'])->name('get.category.by_slug');
    Route::get('p/{slug}.html', [ProductDetailController::class, 'index'])->name('get.product.by_slug');

    Route::get('xac-thuc-tai-khoan', [VerifyAccountController::class, 'newPassword'])->name('get.verify_account');
    Route::post('xac-thuc-tai-khoan', [VerifyAccountController::class, 'updateNewPassword']);
});


//  User account
Route::group(['namespace' => 'User', 'prefix' => 'account'], function () {
    Route::get('update-profile', [UserProfileController::class, 'profile'])->name('get.user.update_profile');

    Route::post('update-profile', [UserProfileController::class, 'updateProfile']);
    Route::get('product', [UserProductController::class, 'index'])->name('get.user.product_index');

    Route::get('product/create', [UserProductController::class, 'create'])->name('get.user.product_create');
    Route::post('product/create', [UserProductController::class, 'store']);

    Route::get('product/update/{id}', [UserProductController::class, 'edit'])->name('get.user.product_update');
    Route::get('product/delete/{id}', [UserProductController::class, 'delete'])->name('get.user.product_delete');
    Route::post('product/update/{id}', [UserProductController::class, 'update']);

});