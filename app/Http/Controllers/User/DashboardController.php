<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Friendrequest;
use App\Models\Like_post;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like_comment;
use App\Models\subcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $id = Auth::user()->id;
       
        $friends = User::where('id', '!=', Auth()->user()->id)->get();
       
        $friendrequest = Friendrequest::with('user')->where('to_user_id', $id)->get();
       
        $request_status = Friendrequest::where('to_user_id', $id)->pluck('status');
    
        $all_posts = Post::with('user')->get();
        
        $like_posts = Like_post::where('user_id', $id)->pluck('post_id')->toArray();
        // dd($like_posts);
        $like_post_data =Like_post::where('post_id', 1)->with('user')->get();
        
        $comments = Comment::with('user')->get();

        $friend_data = Friendrequest::where('user_id', Auth()->user()->id)->get();
// dd($friend_data);
        $like_comments = Like_comment::where('user_id', $id)->pluck('comment_id')->toArray();

        foreach($all_posts as $val){
           $post_id = $val->id;
        }
        // $like_post_count = Like_post::where('post_id', $post_id)->count();
        // dd($like_post_count);
     
        return view('user.dashboard', compact('friends', 'friendrequest', 'request_status', 'all_posts', 'like_posts', 'like_post_data', 'comments', 'friend_data', 'like_comments'));
    }
}
