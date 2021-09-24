<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        
        $user = User::where(['email' => $request->email])->first();       
            $request->session()->put('user',$user);
            return redirect('/');
    }
    public function registration(Request $request){
        $user = new User;
        if($user->where(['email' => $request->email])->exists()){
            return redirect('login')->withErrors([
                'email' => 'Данный пользователь уже зарегистрирован!'
            ]);
        } 
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('login'));
    }
}
