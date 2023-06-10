<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\backend;

//use App\Http\Controllers\Frontend\HomeController as FrontendHome;

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
//Frontend routes
Route::get('/',[HomeController::class, 'home'])->name('frontHome');

Route::get('/product/allproduct/{$id}',[HomeController::class, 'productCategory'])->name('product.category');
Route::get('/products-search', [HomeController::class, 'productSearch'])->name('prodcut.search');

Route::post('/user-store', [HomeController::class, 'userStore'])->name('user.store');









Route::group(['prefix'=>'admin'],function(){
    //authentication
    Route::get('/login',[DashboardController::class, 'login'])->name('user.login');
    Route::post('/do-login',[DashboardController::class, 'doLogin'])->name('do_login');

    Route::group(['middleware'=>'auth'],function(){
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
        //dashboard
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/add', [DashboardController::class, 'addproduct'])->name('addproduct');
        //for Category
        Route::get('/category/list',[CategoryController::class, 'list'])->name('category.List');
        Route::get('/category/form',[CategoryController::class, 'form'])->name('category.form');
        Route::post('/category/store',[CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/view/{id}',[CategoryController::class, 'view'])->name('category.view');
        Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');

        //For Brand
        Route::get('/brand/list',[BrandController::class, 'list'])->name('brand.List');
        Route::get('/brand/form',[BrandController::class, 'form'])->name('brand.form');
        Route::post('/brand/store',[BrandController::class, 'store'])->name('brand.store.data');
        Route::get('/brand/list/delete/{id}', [BrandController::class, 'delete'])->name('brand.list.delete');
        

        //for User
        Route::get('/user/list',[UserController::class, 'user_form'])->name('user.form');
        Route::get('/dash',[UserController::class, 'dashBoard'])->name('dash_board');
        //For Customer
        Route::get('/show/data',[CustomerController::class, 'showData'])->name('show.data');
        Route::get('/add/data', [CustomerController::class, 'addData'])->name('add.data');
        Route::post('/store/data',[CustomerController::class, 'storeData'])->name('store.data');
        Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
        //Route::get('/customer/view/{id}',[CustomerController::class, 'view'])->name('customer.view');
        //For Product
        Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
        Route::get('/product/create-form',[ProductController::class, 'createForm'])->name('product.create.form');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/view/{id}', [ProductController::class, 'view'])->name('product.view'); 
        Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');

        //access-role
        Route::get('/role/list',[RoleController::class, 'list'])->name('role.list');
        Route::get('/role/form',[RoleController::class, 'form'])->name('role.form');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}',[RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/update/{id}',[RoleController::class, 'update'])->name('role.update');
        Route::get('/role/delete/{id}',[RoleController::class, 'delete'])->name('role.delete');

    
        Route::get('/permission/list',[PermissionController::class, 'list'])->name('permission.list');
        Route::get('/permission/list-new',[PermissionController::class, 'list'])->name('permission.list.new');
        // Route::get('/permission/view/{id}', [PermissionController::class, 'view'])->name('permission.view'); 
        // Route::get('/permission/edit/{id}',[PermissionController::class, 'edit'])->name('permission.edit');
        // Route::put('/permission/update/{id}',[PermissionController::class, 'update'])->name('permission.update');
        // Route::get('/permission/delete/{id}',[PermissionController::class, 'delete'])->name('permission.delete');
        
        



        


    });




});