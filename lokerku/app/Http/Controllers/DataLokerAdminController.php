<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class DataLokerAdminController extends Controller
{
    public function tampilsemualoker(){
        $lokerlist['lokers'] = Loker::get();
        return view('/DataLokerAdmin', $lokerlist);
    }

    public function updatestatusloker(Request $request, $idloker){
        $lokerstatus = Loker::find($idloker);

        $status_sekarang = $lokerstatus->status;
        
        if($status_sekarang == "tersedia"){
            $statusdata = [
                'status' => "off",
            ];
        }else{
            $statusdata = [
                'status' => "tersedia",
            ];
        }
        
        $status =  Loker::where('idloker', $idloker)->update($statusdata);
        if ($status) {
            return redirect('/DataLoker')->with('sukes', 'status berhasil di ubah');

        }
    
    }

    public function tambahloker(Request $request){
        $data = [
            'nomer_loker' => $request->input('nomer_loker'),
            'waktu_mulai' => '00.00',
            'waktu_selesai' => '00.00',
            'status' => 'tersedia',
          ];
      
          Loker::create($data);
      
      
          $regis = [
            'message' => 'succes',
            'status' => 202,
            'pesan' => 'Register Berhasil',
            'data' => $data
          ];
          return redirect('/DataLoker');
    }
}