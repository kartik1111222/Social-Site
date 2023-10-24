<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Models\User_otp;
use Carbon\Carbon;

class LoginController extends Controller
{
   //Registration
   public function registration()
   {
      return view('registration');
   }

   public function add_registration(Request $request)
   {
      $data = $request->all();
      // $user = new User();
      // $user->firstname = $data['firstname'];
      // $user->lastname = $data['lastname'];
      // $user->email = $data['email'];
      // $user->password = Hash::make($data['password']);
      // if ($request->has('profile')) {
      //    $profile = $request->profile;
      //    $name = time() . '.' . $profile->extension();
      //    $path = public_path() . '/assets/users/profile';
      //    $profile->move($path, $name);
      //    $user->profile = $name;
      // }
      // $user->save();


      if ($request->has('profile')) {
         $profile = $request->profile;
         $name = time() . '.' . $profile->extension();
         $path = public_path() . '/assets/users/profile';
         $profile->move($path, $name);
         // $user->profile = $name;
      }
      $token_data = [
         'firstname' => $data['firstname'],
         'lastname' => $data['lastname'],
         'password' => $data['password'],
         'address' => $data['address'],
         'profile' => $name,
      ];

      // dd($token_data);

      $user_otp = new User_otp();
      $user_otp->otp = rand(123456, 999999);
      $user_otp->email = $data['email'];
      $user_otp->remember_token = encrypt($token_data);
      $user_otp->count_otp = '1';
      $user_otp->expiry_time = Carbon::now()->addMinutes(5);
      $user_otp->verify_status = '1';
      $user_otp->save();

      return redirect()->route('otp_verification')->with('success', 'Registered Sucessfully!');
   }

   //Verification
   public function otp_verification()
   {
      return view('otp_verification');
   }

   public function verify_otp(Request $request)
   {
      $otp = $request->input('otp');

      $check = User_otp::where('otp', $otp)->first();
      if ($check != null) {

         $check->verify_status = '0';
         $check->save();

         $data = $check['remember_token'];
         $decrypt_data = decrypt($data);
         $user = new User();
         $user->firstname = $decrypt_data['firstname'];
         $user->lastname = $decrypt_data['lastname'];
         $user->email = $check['email'];
         $user->password = Hash::make($decrypt_data['password']);
         $user->address = $decrypt_data['address'];
         $user->profile =  $decrypt_data['profile'];
         $user->save();
         if ($user == true) {
            return redirect()->route('login')->with('success', 'User verified.');
         }
      } else {
         return view('otp_verification')->with('error', 'Wrong Otp!, Please try again.');
         // return redirect()->route('login')->with('error', 'Wrong Email id or password!');
         // return redirect()->route('otp_verification')->with('error', 'Wrong Otp!, Please try again.');
      }
   }

   //Login
   public function login()
   {
      return view('login');
   }

   public function login_check(LoginRequest $request)
   {

      if (Auth::attempt($request->only('email', 'password'))) {
         return redirect()->route('user.dashboard')->with('success', 'Logged in successfully!');
      } else {
         return redirect()->route('login')->with('error', 'Wrong Email id or password!');
      }
   }

   public function logout()
   {
      Auth::logout();
      return redirect()->route('login')->with('info', 'Logged out successfully!');
   }
}
