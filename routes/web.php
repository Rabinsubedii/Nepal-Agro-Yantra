<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\QuestionAnsController;
use App\Http\Controllers\TopcardController;
use App\Http\Controllers\FrontednController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FooterMenuController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Controller;

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
// Route::get('/', function () {
//     return view('welcome');
// });

   Route::get('/',[FrontednController::class,'index']);

   //public routes
   //contact
    Route::get('contact',[ContactController::class,'index']);
    Route::post('add',[ContactController::class,'add']);
    //service
    Route::get('allservice',[ServiceController::class,'allservice']);
   


    //images
    Route::get('allphoto',[AlbumController::class,'pictures']);

    //product
    Route::get('allproduct',[ProductController::class,'allProduct']);
    Route::get('product/{slug}',[ProductController::class,'productview']);

    //user login register
    Route::get('users', [LoginRegisterController::class,'index']);

    //Album
    Route::get('album', [AlbumController::class,'index']);
    Route::get('add-album', [AlbumController::class,'create']);
    Route::post('add-album', [AlbumController::class,'store']);
    Route::get('/product-images/{id}',[AlbumController::class,'images'])->name('album.images');
    Route::get('/admin-images/{id}',[AlbumController::class,'adminimage'])->name('album.adminimage');
    Route::get('edit-album/{id}',[AlbumController::class,'edit']);
    Route::put('update-album/{id}', [AlbumController::class, 'update']);
    Route::get('delete-album/{id}',[AlbumController::class,'destroy']);
    Route::get('remove-image/{id}',[AlbumController::class,'removeImage']);
 
    
    
    Route::middleware(['auth'])->group(function(){

    //top card
    Route::get('topcard',[TopcardController::class,'index']);
    Route::get('add-card',[TopcardController::class,'create']); 
    Route::post('add-card',[TopcardController::class,'store']); 
    Route::get('edit-card/{id}',[TopcardController::class,'edit']);
    Route::put('update-card/{id}', [TopcardController::class, 'update']);
    Route::get('delete-card/{id}',[TopcardController::class,'destroy']);
      
   //products
    Route::get('product',[ProductController::class,'index']);
    Route::get('add-product',[ProductController::class,'create']);
    Route::post('add-product',[ProductController::class,'store']);
    Route::get('editproduct/{id}',[ProductController::class,'edit']);
    Route::put('updateproduct/{id}',[ProductController::class,'update']);
    Route::get('deleteproduct/{id}',[ProductController::class,'destroy']);



   // client question answer 
    Route::get('client',[QuestionAnsController::class,'index']);
    Route::get('add-question',[QuestionAnsController::class,'create']);
    Route::post('add-question',[QuestionAnsController::class,'store']);
    Route::get('edit-question/{id}',[QuestionAnsController::class,'edit']);
    Route::put('update-question/{id}', [QuestionAnsController::class, 'update']);
    Route::get('delete-qsan/{id}',[QuestionAnsController::class,'destroy']);

    //service
    Route::get('service',[ServiceController::class,'index']);
    Route::get('add-service',[ServiceController::class,'create']);
    Route::post('add-service',[ServiceController::class,'store']);
    Route::get('edit-service/{id}',[ServiceController::class,'edit']);
    Route::put('update-service/{id}', [ServiceController::class, 'update']);
    Route::get('delete-service/{id}',[ServiceController::class,'destroy']);

    //about
    Route::get('about',[AboutController::class,'index']);
    Route::get('add-about',[AboutController::class,'create']);
    Route::post('add-about',[AboutController::class,'store']);
    Route::get('edit-about/{id}',[AboutController::class,'edit']);
    Route::put('update-about/{id}', [AboutController::class, 'update']);
    Route::get('delete-about/{id}',[AboutController::class,'destroy']);

      //contact 

    Route::get('edit/{id}',[ContactController::class,'edit']);
    Route::post('update',[ContactController::class,'update'])->name('update');
    Route::get('delete/{id}',[ContactController::class,'delete']);

    //settings
    Route::get('settingpage',[SettingController::class,'index']);
    Route::get('add-setting',[SettingController::class,'create']);
    Route::post('add-setting',[SettingController::class,'store']);
    Route::get('edit-setting/{id}',[SettingController::class,'edit']);
    Route::put('update-setting/{id}', [SettingController::class, 'update']);
    Route::get('delete-setting/{id}',[SettingController::class,'destroy']);

    //menu
    Route::get('menu',[MenuController::class,'index']);
    Route::get('allpage',[MenuController::class,'page']);
    Route::get('add-menu',[MenuController::class,'create']);
    Route::post('add-menu',[MenuController::class,'store']);
    Route::get('edit-menu/{id}',[MenuController::class,'edit']);
    Route::put('update-menu/{id}', [MenuController::class, 'update']);
    Route::get('delete-menu/{id}',[MenuController::class,'destroy']);

    //gallery album
    Route::get('galleryalbum',[GalleryalbumController::class,'index']);
    Route::get('add-albumgallery',[GalleryalbumController::class,'create']);
    Route::post('add-albumgallery',[GalleryalbumController::class,'store']);
    Route::get('edit-albumimage/{id}',[MenuController::class,'edit']);
    Route::put('update-albumimage/{id}', [MenuController::class, 'update']);
    Route::get('delete-albumimage/{id}',[MenuController::class,'destroy']);


    //footer menu
    Route::get('add-footermenu',[FooterMenuController::class,'create']);
    Route::post('add-footermenu',[FooterMenuController::class,'store']);
    Route::get('edit-footermenu/{id}',[FooterMenuController::class,'edit']);
    Route::put('update-footermenu/{id}', [FooterMenuController::class, 'update']);
    Route::get('delete-footermenu/{id}',[FooterMenuController::class,'destroy']);
    
    Route::get('/profileedit',function(){ return view('profile.edit');})->name('profile.edit');
    Route::get('/home', function () { return view('dashboard');})->name('home');
    Route::get('/table',function(){ return view('pages.table_list');})->name('table');
    Route::get('/typography',function(){ return view('pages.typography');})->name('typography');
    Route::get('/icons',function(){ return view('pages.icons');})->name('icons');
    Route::get('/map',function(){return view('pages.map');})->name('map');
    Route::get('/noti',function(){return view('pages.notifications');})->name('notifications');
    Route::get('/language',function(){return view('pages.language');})->name('language');
    Route::get('/userindex', [UserController::class,"index"])->name('user.index');
    Route::resource('/roles',RoleController::class)->names([
        'index'=>'role.index',
       'create'=>'role.create',
       'destroy'=>'role.delete',
       'store'=>'role.store',
       'edit'=>'role.edit',
       'update'=>'role.update'
    ]);
    Route::get('/rolesassign',[RoleController::class,'assign']);
    Route::get('/roleassign/{id}',[RoleController::class,'assignToPermissions']);
    Route::post('/roleassign/{id}',[RoleController::class,'AssignPermissionToRole']);

    Route::resource('/permissions',PermissionController::class)->names([
        'index'=>'permission.index',
       'create'=>'permission.create',
       'destroy'=>'permission.delete',
       'store'=>'permission.store',
       'edit'=>'permission.edit',
       'update'=>'permission.update'
    ]);
    Route::get('/forbidden',[Controller::class,'forbidden']);

    Route::get('/assignrole/{id}',[UserController::class,'assignRoleView'])->name('roleassign');
    Route::post('assignrole/{id}',[UserController::class,'assignRoleStore'])->name('roleassignstore');

    //product

});
