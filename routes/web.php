<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommenterController;
use App\Http\Controllers\postController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UpgradeController;
use App\Models\Demande;
use App\Models\LikePost;
use App\Models\Post;
use Illuminate\Http\Request;
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
  return view('User.includes.post');
});
Route::get('/service', function () {
  return view('User.includes.service');
});
Route::get('/profile', function () {
  return view('User.includes.profile');
});
Route::get('/home', function () {
  return view('User.home');
});
Route::get('/calendar', function () {
  return view('User.Provider-company.calander');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// // home controller  
// Route::get("/search", [HomeController::class, 'search']);
// Route::post('/sendmail', [HomeController::class, 'sendmail']);


//profile controller

// Route::get('/profile', [ProfileController::class, 'profile']);
// Route::get('/user_profile/{id}', [ProfileController::class, 'user_profile']);
// Route::get('/update/{id}', [ProfileController::class, 'update']);
// Route::post('/editprofile/{id}', [ProfileController::class, 'editprofile']);

//post controller
Route::get('/Posts', [postController::class, 'index']);
Route::get('/delete_post/{id}', [postController::class, 'destroy']);
Route::post('/post_create', [postController::class, 'store']);
Route::post('/post_update/{id}', [postController::class, 'update']);
Route::post('/remove_image/{id}/{path}', [postController::class, 'remove_image']);


////comment controller

Route::post('/comment_create', [CommenterController::class, 'store']);
Route::delete('/delete_comments/{id}', [CommenterController::class, 'destroy']);
Route::post('/comment_update/{id}', [CommenterController::class, 'update']);

////like controller

// Route::post('save-likedislike', 'likeController@save_likedislike');
// Route::get('/post/{post}/like/', [likeController::class, 'likepl']);
// Route::get('/post/{post}/dislike/', [likeController::class, 'dislikepl']);
// Route::post('/post/{id}/act', [likeController::class, 'actOnPost']);

//provider Controller

// Route::post('/create_request', [UpgradeController::class, 'store']);
// Route::post('/demande', [UpgradeController::class,'demande']);
// Route::post('/create_provider', [UpgradeController::class,'create_provider'])->middleware(['provider']);
// Route::post('/update_provider/{id}', [UpgradeController::class,'update_provider'])->middleware(['provider']);


//tag controller 

Route::get('/tag', [TagController::class, 'index']);
Route::post('/tag_create', [TagController::class, 'store']);
Route::post('/tag_update/{id}', [TagController::class, 'update']);
Route::get('/tag_delete/{id}', [TagController::class, 'destroy']);

//category controller

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category_create', [CategoryController::class, 'store']);
Route::post('/category_update/{id}', [CategoryController::class, 'update']);
Route::get('/category_delete/{id}', [CategoryController::class, 'destroy']);

// // add comment
// Route::post('comment/add', [CommentController::class, 'store']);
// // delete comment
// Route::post('comment/delete/{id}', [CommentController::class, 'destroy']);


#Manage Review
// Route::post('/review-store',[ProfileController::class, 'reviewstore'])->name('review.store');

Route::post('/warning/{id}', [AdminController::class, 'warningemail']);



////admin controller

Route::get('/acces_approved/{id}', [AdminController::class, 'acces_approved']);
Route::get('/acces_denied/{id}', [AdminController::class, 'acces_denied']);
Route::get('/approved', [AdminController::class, 'show_user_approved']);
Route::get('/denied', [AdminController::class, 'show_user_denied']);
Route::get('/warned_user', [AdminController::class, 'warning']);




//provider controller

// Route::get('/provider', [providerController::class, 'provider']);
// Route::get('/download_cin/{id}', [UpgradeController::class, 'download_cin']);
// Route::get('/download_certificat/{id}', [UpgradeController::class, 'download_certificat']);
// Route::get('/request', [UpgradeController::class, 'request']);
// // Route::get('/change_role/{id}',[UpgradeController::class,'change_role']);
// Route::get('/request_demande/{id}', [UpgradeController::class, 'request_demande']);
// Route::get('/approved_provider/{id}', [providerController::class, 'approved_provider']);
// Route::get('/refused_provider/{id}', [providerController::class, 'refused_provider']);
// // Route::get('/approved_demande/{id}', [providerController::class,'approved_demande']);
// Route::get('/refused_demande/{id}', [providerController::class,'refused_demande']);

Route::get('/events', function () {
  $provider_id = Auth::user()->id;
  $events = Demande::with([
    'provider' => function ($query) {
    $query->select('id', 'name');
  },
  'user' => function ($query) {
    $query->select('id', 'icon','name');
  }
  ])
    ->where('provider_id', $provider_id)
    ->get(['id', 'title', 'jour', 'status']);

  return response()->json($events);
});

Route::get('/posts/{post}/tags', function ($post) {
  $posts = Post::findOrFail($post);
  $tags = $posts->tags;
  return response()->json($tags->toArray());
});


Route::post('/like-post', function(Request $request) {
  $postId = $request->post_id;
  $post = Post::findOrFail($postId);
  $user = auth()->user();
  if ($user) {
      $likePost = $post->likePosts()->where('user_id', $user->id)->first();
      if ($likePost) {
          $likePost->delete();
          $likeCount = $post->likePosts()->count();
          return response()->json(['like_count' => $likeCount,
          'fill'=> 0,]);
      } else {
          $likePost = new LikePost([
              'user_id' => $user->id,
          ]);
          $post->likePosts()->save($likePost);
          $likeCount = $post->likePosts()->count();
          return response()->json(['like_count' => $likeCount,
          'fill'=> 1,
        ]);
      }

  } else {
      return response()->json(['error' => 'Unauthorized'], 401);
  }
})->middleware('auth')->name('like-post');

