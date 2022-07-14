<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;

class WebsiteController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    public function reservation(){
        return view('frontend.reservation.reservation');
    }

    public function about(){
        return view('frontend.about.about');
    }

    public function contact(){
        return view('frontend.contact.contact');
    }

    public function menu(){
        return view('frontend.menu.menu');
    }

    public function admin_login(){
        return view('backend.auth.login');
    }


    public function admin_register(){
        return view('backend.auth.register');
    }

    public function login_access(Request $request){
        $this->validate($request,[
         'email' => 'required|email',
         'password' => 'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if ($user) {
         if (Hash::check($request->password,$user->password)) {
             Auth::login($user);
             return redirect()->route('dashboard');
         }else{
             return redirect()->back()->with('error','Password is incorrect');
         }
        }else{
         return redirect()->back()->with('error','User is incorrect');
        }
     }

     public function register_access(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('dashboard');
    }

}
