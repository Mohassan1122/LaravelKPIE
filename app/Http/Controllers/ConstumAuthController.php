<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ConstumAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function registerUser(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res = $user->save();

        if ($res) {
            return redirect('login')->with('success', 'Youhave Registered successfully, please login ');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }
    public function loginUser(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password Not Matches');
            }
        } else {
            return back()->with('fail', 'This Email is not Registered');
        }
    }
    public function dashboard(Request $request)
    {
        $data = [];
        if ($request->session()->has('loginId')) {
            $data = User::where('id', '=', $request->session()->get('loginId'))->first();
        }
        return view('dashboard.dashboard', compact('data'));
    }

    public function logout(Request $request)
    {
        if ($request->session()->has('loginId')) {
            $request->session()->pull('loginId');
        }
        return redirect('login');
    }


    public function forgotPassword()
    {

        return view('auth/password/confirm');
    }


    public function forgotPasswordAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $actionLink = route('password.confirm.show', ['token' => $token, 'email' => $request->email]);
        $body = "We have recieved a request to reset the password for <b>Your app name</b> account associated with " . $request->email . "
         you can reset yout password by clicking the link below ";


        Mail::send('auth.password.forgetPassword', ['actionLink' => $actionLink, 'body' => $body], function ($message) use ($request) {

            $message->to($request->email, 'Mohammed Hassan');
            $message->subject('Reset Password');
        });

        return back()->with('status', 'We have e-mailed your password reset link!');
    }

    public function showForgotPassword(Request $request, $token = null)
    {
        return view('auth.password.resetPasswordLink')->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);

        $check_token = DB::table('password_resets')->where(['email'=>$request->email, 'token'=>$request->token])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token!');
        }

        User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('login')->with('success', 'Your password has been changed!');
    }

}
