<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friendrequest;
use App\Models\Post;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(){
        $friend_count = Friendrequest::where('status', '0')->count();
        $posts = Post::all();
        return view('user.profile', compact('friend_count', 'posts'));
    }

    public function about(){
        return view('user.about');
    }

    public function friends(){
        // $friends = Friendrequest::where('status', '0')->with('user')->get();


        $friends = User::select('users.id', 'users.firstname', 'users.lastname', 'users.email', 'users.profile')
        	->join('friendrequests', 'friendrequests.to_user_id', '=', 'users.id')->where('friendrequests.status', '0')
        	->get();
        return view('user.friends', compact('friends'));
    }
}
