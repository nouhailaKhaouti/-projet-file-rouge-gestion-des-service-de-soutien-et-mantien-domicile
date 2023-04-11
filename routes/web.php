<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\UpgradeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('Admin.dashboard');
});
Route::get('/user_dashboard', function () {
    return view('User.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// home controller  
Route::get("/search",[HomeController::class,'search']);
Route::post('/sendmail',[HomeController::class,'sendmail']);


//profile controller

Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/user_profile/{id}',[ProfileController::class,'user_profile']);
Route::get('/update/{id}',[ProfileController::class,'update']);
Route::post('/editprofile/{id}',[ProfileController::class,'editprofile']);

//post controller

Route::post('/post',[PostController::class,'post']);
Route::get('/delete_post/{id}',[PostController::class,'delete']);
Route::get('/createpost',[PostController::class,'createpost']);
Route::post('/update_post/{id}',[PostController::class,'update_post']);
Route::get('/post_display',[PostController::class,'post_display']);


////comment controller

Route::post('comment',[commentController::class,'comment'])->name('comments.store');
Route::get('/delete_comment/{id}',[commentController::class,'delete']);
Route::post('update_comment/{id}',[commentController::class,'update_comment']);

////like controller

Route::post('save-likedislike','likeController@save_likedislike');
Route::get('/post/{post}/like/', [likeController::class,'likepl']);
Route::get('/post/{post}/dislike/', [likeController::class,'dislikepl']);
Route::post('/post/{id}/act', [likeController::class,'actOnPost']);

//provider Controller

Route::post('/create_request', [UpgradeController::class,'store']);
// Route::post('/demande', [UpgradeController::class,'demande']);
// Route::post('/create_provider', [UpgradeController::class,'create_provider'])->middleware(['provider']);
// Route::post('/update_provider/{id}', [UpgradeController::class,'update_provider'])->middleware(['provider']);


//tag controller 

Route::get('/tag', [TagController::class,'index']);
Route::post('/tag_create', [TagController::class,'store']);
Route::post('/tag_update/{id}', [TagController::class,'update']);
Route::get('/tag_delete/{id}',[TagController::class,'destroy']);

//category controller

Route::get('/category', [CategoryController::class,'index']);
Route::post('/category_create', [CategoryController::class,'store']);
Route::post('/category_update/{id}', [CategoryController::class,'update']);
Route::get('/category_delete/{id}',[CategoryController::class,'destroy']);

  // add comment
  Route::post('comment/add', [CommentController::class,'store']);
  // delete comment
  Route::post('comment/delete/{id}', [CommentController::class,'destroy']);


#Manage Review
// Route::post('/review-store',[ProfileController::class, 'reviewstore'])->name('review.store');

Route::post('/warning/{id}',[AdminController::class,'warningemail']);



////admin controller

Route::get('/acces_approved/{id}',[AdminController::class,'acces_approved']);
Route::get('/acces_denied/{id}',[AdminController::class,'acces_denied']);
Route::get('/approved',[AdminController::class,'show_user_approved']);
Route::get('/denied',[AdminController::class,'show_user_denied']);
Route::get('/warned_user',[AdminController::class,'warning']);




//provider controller

Route::get('/provider', [providerController::class,'provider']);
Route::get('/download_cin/{id}', [UpgradeController::class,'download_cin']);
Route::get('/download_certificat/{id}', [UpgradeController::class,'download_certificat']);
Route::get('/request', [UpgradeController::class,'request']);
// Route::get('/change_role/{id}',[UpgradeController::class,'change_role']);
Route::get('/request_demande/{id}',[UpgradeController::class,'request_demande']);
Route::get('/approved_provider/{id}', [providerController::class,'approved_provider']);
Route::get('/refused_provider/{id}', [providerController::class,'refused_provider']);
// Route::get('/approved_demande/{id}', [providerController::class,'approved_demande']);
// Route::get('/refused_demande/{id}', [providerController::class,'refused_demande']);