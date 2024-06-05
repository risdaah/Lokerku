<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Support\Facades\DB;
use App\Models\Pengguna;
use App\Models\HistorySewaLoker;
use Illuminate\Http\Request;
use Auth;

class SewaLokerController extends Controller
{
    public function tampilsemualokersewa(){
        $lokerlist['lokers'] = Loker::get();
        return view('/ListLoker', $lokerlist);
    }

    function detail($id)
    {
        $data =Loker::find($id);
        return view('/DetailSewaLoker',['product'=>$data]);
    }

    function kembali($id)
    {
        $data = DB::table('historysewalokers')
        ->where('idpengguna',$id)
        ->where('status',"disewa")
        ->get();
        return view('/LokerYangDipinjam',['sewa'=>$data]);
       
    }


    public function sewaloker(Request $request){
        // $level = "pengguna";

        
        $data = [
          'idpengguna' => $request->input('idpengguna'),
          'nomor_loker' => $request->input('nomerloker'),
          'nama_pengguna'=> $request->input('nama'),
          'npm'=> $request->input('npm'),
          'email'=> $request->input('email'),
          'waktu_mulai'=> $request->input('waktumulai'),
          'waktu_selesai'=> $request->input('waktuselesai'),
          'status'=> "disewa",
        ];

        $data1 = [
            'waktu_mulai'=> $request->input('waktumulai'),
            'waktu_selesai'=> $request->input('waktuselesai'),
            'status' =>  'disewa',
        ];

        $menu =  Loker::where('idloker',$request->input('idloker'))->update($data1);

        $data2 = [
          
            'status' =>  'menyewa',
        ];

        

        $menu =  Pengguna::where('idpengguna',$request->input('idpengguna'))->update($data2);
    
        HistorySewaLoker::create($data);
    
    
        $regis = [
          'message' => 'succes',
          'status' => 202,
          'pesan' => 'Register Berhasil',
          'data' => $data
        ];
        Auth::logout();
        return redirect('/');
    }

    function kembalikan(Request $request)
    {
          $data1 = [
              'waktu_mulai'=> "00.00",
              'waktu_selesai'=> "00.00",
              'status' =>  'tersedia',
          ];
          $menu =  Loker::where('nomer_loker',$request->input('nomer_loker'))->update($data1);
  
          $data2 = [
              'status' =>  'kosong',
          ];
          $menu =  Pengguna::where('idpengguna',$request->input('idpengguna'))->update($data2);

          $data3 = [
            'status' =>  'selesai',
        ];
        $menu =  HistorySewaLoker::where('idhistory',$request->input('idhistory'))->update($data2);

          $regis = [
            'message' => 'succes',
            'status' => 202,
            'pesan' => 'Register Berhasil',
            'data' => ''
          ];
          Auth::logout();
          return redirect('/');
    }

    public function updatestatus(Request $request)
    {
        //
       
        
    }
}