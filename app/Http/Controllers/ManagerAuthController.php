<?php

namespace App\Http\Controllers;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class ManagerAuthController extends Controller
{
    //
    public function showRegisterForm()
    {
        return view('auth.manager_register');
    }

    //
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);


        $manager = Manager::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('manager/login');





    }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.manager_login');
    }


    public function login(Request $request)
    {
        $val=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
      $test=  Manager::where('email',$val['email'])->first();
        if($test){
            return redirect('employees');
        }


        return redirect()->back()->withErrors(['email' => 'Invalid email']);
    }

    public function logout()
    {
        //Auth::guard('manager')->logout();
        return redirect('manager/login');
    }
}
