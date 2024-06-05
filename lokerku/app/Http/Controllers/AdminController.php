<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function editbaruadmin(Request $request){
        $data = [
            'namaadmin' => $request->input('nama-admin'),
            'username'=> $request->input('username-admin'),
            'email'=> $request->input('email-admin'),
            'telp'=> $request->input('telp-admin'),
            // 'level'=>  $request->input('level'),
          ];
  
          $menu =  Admin::where('idadmin',$request->input('idadmin'))->update($data);
      
          $regis = [
            'message' => 'succes',
            'status' => 202,
            'pesan' => 'Register Berhasil',
            'data' => $data
          ];
          Auth::logout();
          return redirect('/');
    }
}