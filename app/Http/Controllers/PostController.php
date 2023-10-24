<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like_comment;
use App\Models\Like_post;
use App\Models\Post;
use App\Models\subcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function add_posts(Request $request)
  {
    $data = $request->all();
    $post = new Post();
    // $post->media = $data['media'];

    if ($request->has('media')) {
      $media = $request->media;
      $name = time() . '.' . $media->extension();
      $path = public_path() . '/assets/images/media';
      $media->move($path, $name);
      $post->media = $name;
    }
    $post->description = $data['description'];
    $post->tag_user = $data['tag_friend'];
    $post->share_link = $data['share_link'];
    $post->post_activity = $data['activity'];
    $post->post_location = $data['location'];
    $post->user_id = Auth::user()->id;

    $post->save();

    return response()->json([
      'message' => 'post added successfully!'
    ]);
  }

  public function like_dislike_post(Request $request){
    $data = $request->all();
 
    $like_post = new Like_post();
    $like_post->post_id =$data['post_id'];
    $like_post->user_id = Auth::user()->id;
    $like_post->save();

    $all_posts = Post::pluck('id');
    $post_count = Like_post::where('post_id', $data['post_id'])->count();
    
    return response()->json([
      'Post_like_count' => $post_count, 
      'message' => 'Like added successfully!'
    ]);
  
  }

  public function dislike_post(Request $request){
    $data = $request->all();
  
    $user_id = Auth::user()->id;
    $post_id = $data['post_id'];
    $check = Like_post::where('user_id', $user_id)->where('post_id', $post_id)->first();
    if($check != null){
      $check->delete();

      $post_count = Like_post::where('user_id', $user_id)->where('post_id', $data['post_id'])->count();
      return response()->json([
        'Post_like_count' => $post_count, 
        'message' => 'Post dislike successfully!'
      ]);
    }else{
      return response()->json([
        'message' => 'Something went wrong!'
      ]);
    }
  }


  //Comments
  public function add_post_comment(Request $request){
    $data = $request->all();
    // dd($data);

    $comment = new Comment();
    $comment->comment = $data['comment'];
    $comment->post_id = $data['post_id'];
    $comment->user_id = Auth::user()->id;
    $comment->save();

    return response()->json([
      'message' => 'Comment added successfully!'
    ]);
  }

  //sub comments
  public function add_post_sub_comment(Request $request){
    $data = $request->all();
    // dd($data);
    $subcomment = new subcomment();
    $subcomment->subcomment = $data['sub_comment'];
    $subcomment->comment_id = $data['comment_id'];
    $subcomment->save();

    return response()->json([
      'message' => 'Sub Comment added successfully!'
    ]);
  }

  //like comment
  public function like_comments(Request $request){
    $data = $request->all();

    $likecomment = new Like_comment();
    $likecomment->comment_id = isset($data['comment_id']) ? $data['comment_id'] : ' '; 
    $likecomment->subcomment_id = isset($data['subcomment_id']) ? $data['subcomment_id'] : ' '; 
    $likecomment->user_id = Auth::user()->id;
    $likecomment->save();

    $comment_like_count = Like_comment::where('comment_id', $data['comment_id'])->count();
    
    return response()->json([
      'comment_like_count' => $comment_like_count,
      'message' => 'like added successfully!'
    ]);
  }

  //dislike comment
  public function dislike_comments(Request $request){
    $comment_id = $request->input('comment_id');
    $user_id = Auth()->user()->id;

    $likecomment = Like_comment::where('comment_id', $comment_id)->where('user_id', $user_id)->first();
    if($likecomment != null){
      $likecomment->delete();

      $comment_like_count = Like_comment::where('comment_id', $comment_id)->count();

      return response()->json([
      'comment_like_count' => $comment_like_count,
      'message' => 'dislike comment successfully!'
      ]);
    }else{
      return response()->json([
        'message' => 'comment not found'
      ]);
    }
  }
}
