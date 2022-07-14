<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;

class AdminController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.admin.index');
    }

    public function recycle(){
        return view('backend.admin.recycle');
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}
