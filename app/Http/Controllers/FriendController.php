<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friendrequest;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function add_friend_request(Request $request){
        $to_user = $request->input('to_user_id');
        // dd($request);
       $friend = new Friendrequest();
       $friend->to_user_id = $to_user;
       $friend->status = '1';
       $friend->user_id = Auth()->user()->id;
       $friend->save();

       return response()->json([
        'message' => 'Request send successfully!'
       ]);
    //    $friend->user_id = ;
    }

    public function friend_request_status(Request $request, $id){

     $request_type = $request->input('request_type');
     
      $user_id = Auth::user()->id; 
      $check = Friendrequest::where('to_user_id', $user_id)->find($id);
        if($request_type == 'approved'){
          $check->status = '0';
          $check->save();

          return response()->json([
          'message' => 'request approved'
          ]);
        }else{
            $check->status = '2';
          $check->save();

          return response()->json([
          'message' => 'request cancelled'
          ]);
        }
    }
}
