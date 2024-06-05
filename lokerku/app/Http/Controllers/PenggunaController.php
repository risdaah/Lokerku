<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Auth;

class PenggunaController extends Controller
{
    public function editprofiluser(){
        //$pengguna = Pengguna::all();
        // return $pengguna;
        return view('/EditProfilUser')->with('penggunas', Pengguna::all());
    }

    public function editbaru(Request $request){
        // $level = "pengguna";
        $data = [
          'nama' => $request->input('nama-pengguna'),
          'npm'=> $request->input('npm-pengguna'),
          'email'=> $request->input('email-pengguna'),
          'telp'=> $request->input('telp-pengguna'),
          'status'=>  $request->input('status'),
        ];

        $menu =  Pengguna::where('idpengguna',$request->input('idpengguna'))->update($data);
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