<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home_page'])->name('home_page');

//Registration
Route::get('registration', [LoginController::class, 'registration'])->name('registration');
Route::post('registration', [LoginController::class, 'add_registration'])->name('add_registration');

//Verification
Route::get('otp_verification', [LoginController::class, 'otp_verification'])->name('otp_verification');
Route::post('otp_verification', [LoginController::class, 'verify_otp'])->name('verify_otp');

//Login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_check'])->name('login_check');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//Public User
Route::prefix('User')->name('user.')->group(function(){
    Route::middleware('auth:web')->group(function(){
         Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
         Route::post('dashboard', [FriendController::class, 'add_friend_request'])->name('add_friend_request');
         Route::post('dashboard_request/{id}', [FriendController::class, 'friend_request_status'])->name('friend_request_status');

         //posts
         Route::post('add_posts', [PostController::class, 'add_posts'])->name('add_posts');
         Route::post('like_post', [PostController::class, 'like_dislike_post'])->name('like_post');
         Route::post('dislike_post', [PostController::class, 'dislike_post'])->name('dislike_post');

         //post comment
         Route::post('add_comment', [PostController::class, 'add_post_comment'])->name('post_comment');
         Route::post('add_sub_comment', [PostController::class, 'add_post_sub_comment'])->name('post_sub_comment');

         //like & dislike comments
         Route::post('like_comments', [PostController::class, 'like_comments'])->name('like_comments');
         Route::post('dislike_comments', [PostController::class, 'dislike_comments'])->name('dislike_comments');

         //profile
         Route::get('profile', [ProfileController::class, 'profile'])->name('profile');

         //about us
         Route::get('about', [ProfileController::class, 'about'])->name('about');

         //firends
         Route::get('friends', [ProfileController::class, 'friends'])->name('friends');
    });
});