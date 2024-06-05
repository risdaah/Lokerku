<?php

namespace App\Http\Controllers;
use App\Models\HistorySewaLoker;
use Illuminate\Http\Request;

class RiwayatSewaAdminController extends Controller
{
    public function tampilriwayat(){
        
        $riwayats['sewalokers'] = HistorySewaLoker::get();
        return view('/RiwayatSewaLoker', $riwayats);
    }

    public function lokersaatini(){
        $riwayats['sewalokers'] = HistorySewaLoker::get();
        return view('/LokerYangDipinjam', $riwayats);
    }
}