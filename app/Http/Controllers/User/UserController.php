<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salary;
use App\Models\Project;
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
        $credentials = $request->only('email', 'password');
        if (\Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/login');
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

    public function empIndex(User $user)
    {
        $user = User::where('role_id', 2)->get();
        return view('user.index', ['users' => $user]);
    }

    public function empCreate()
    {
        return view('emp.create');
    }

    public function empstore(Request $request)
    {
        $emp['name'] = $request->name;
        $emp['email'] = $request->email;
        $emp['password'] = Hash::make($request->password);
        $emp['role_id'] = $request->role_id;

        $sal['basic'] = $request->basic;
        $sal['hra'] = $request->hra;
        $sal['da'] = $request->da;
        $sal['total'] = $request->total;

        $employee = User::create($emp);
        $sal['user_id'] = $employee->id;

        $salary = Salary::create($sal);


        return redirect('/employee/index');
    }
}
