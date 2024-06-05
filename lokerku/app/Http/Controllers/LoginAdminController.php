<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function loginprosesadmin(Request $request){
        $admin= Admin::where(['username'=>$request->username])->first();
        
        if (!$admin) {
            return "username or password is not match";
        }else{
            $request->session()->put('admin',$admin);
            return redirect('/HomepageAdmin');
        }

        // if (Auth::atempt(['email' => $request->input('npm'), 'password' => $request->input('password')])){
        //     return redirect('/HomepageAdmin');
        // }else{
        // $request->session()->flash('failed', 'npm atau password invalid');
        // return redirect()->back();
        // }
    }

    public function logoutadmin(Request $request){
        Auth::logout();
        return redirect('/');
    }

}