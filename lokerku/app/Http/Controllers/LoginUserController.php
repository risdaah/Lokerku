<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Auth;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function loginprosesuser(Request $request){
        $pengguna= Pengguna::where(['npm'=>$request->npm,'password'=>$request->password])->first();

      //   $request->validate([
      //     'npm' => 'required',
      //     'password' => 'required'
      //  ]);

      //   if(Auth::attempt($request->only('npm', 'password'))){
      //     return redirect('/HomepageUser');
      //   }
      //     return redirect('/PilihanLogin');
        
        if (!$pengguna) {
            return "NPM or password is not match";
        }else{
            $request->session()->put('pengguna',$pengguna);
            return redirect('/HomepageUser');
        }
    }

    public function registeruser(Request $request){
        // $level = "pengguna";
        $data = [
          'nama' => $request->input('nama'),
          'npm' => $request->input('npm'),
          'email' => $request->input('email'),
          'telp' => $request->input('telp'),
          'password' => $request->input('password'),
        ];
    
        Pengguna::create($data);
    
    
        $regis = [
          'message' => 'succes',
          'status' => 202,
          'pesan' => 'Register Berhasil',
          'data' => $data
        ];
        return redirect('/LoginUser');
    }

    public function logoutuser(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function lupapassword(Request $request){
        $npm = $request->input('npm');
        $email = $request->input('email');
        $user = Pengguna::where([
            'npm' => $npm,
            'email' => $email,
            ])->first();


            if (isset($user)) {
                if ($npm) {
                  if (($email)) {
                    $data =Pengguna::find($email);
                   
                    return view('/RubahPasswordUser', ['data'=>$user]);

                }
                }
                }else{
                    return view('/PilihanLogin');
                }
                 
    }

    public function rubahpassworduser(Request $request){

      $data1 = [
        'password' => $request->input('password')
      ];

      $menu =  Pengguna::where('idpengguna', $request->input('data'))->update($data1);


       return redirect('/');
                 
    }
}