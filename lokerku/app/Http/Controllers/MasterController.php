<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function tambahadmin(Request $request){
        $data = [
            'namaadmin' => $request->input('namaadmin'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
            'password' => $request->input('password'),
            'level' => 'admin'
          ];
      
          Admin::create($data);
      
          $regis = [
            'message' => 'succes',
            'status' => 202,
            'pesan' => 'Register Berhasil',
            'data' => $data
          ];

          //return $regis;
          return redirect('/');
    }
}