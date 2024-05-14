<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index (){
        return view ('auth.login');
        
    }

    public function login_proses(Request $request){
        $request ->validate([
            'email'  => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request-> email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.products');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }

    public function logout(){
        dd('oke');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_proses(Request $request){
        $request ->validate([
            'nama' =>'required' ,
            'email'  => 'required | email|unique:user,email',
            'password' => 'required|min:6'
        ]);

        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] =Hash::make($request->email) ;

        User::create($data);

        $login = [
            'email' => $request-> email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.products');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }
}