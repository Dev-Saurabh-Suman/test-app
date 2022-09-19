<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function adminRegister()
    {
        return view('admin.register');
    }

    public function adminStore(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 1;
        User::create($data);
        return redirect('/admin/login');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminAuthenticate(Request $request)
    {
        $credentials = $request->only('email','password');
        if(\Auth::attempt($credentials))
        {
            return redirect('/admin/dashboard');
        }
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function adminlogout(Request $request)
    {
        \Auth::logout();
        return redirect('/admin/login');
    }

    public function empCreate()
    {
        return view('emp.create');
    }
}
