<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\peminjamanBukuModel;
use App\detailPeminjamanBukuModel;
use App\pengembalianBukuModel;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;

class transaksiController extends Controller
{
    public function pinjamBuku(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'id_siswa'=>'required',
            'tanggal_pinjam'=>'required',
            'tanggal_kembali'=>'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = peminjamanBukuModel::create([
            'id_siswa'  =>$req->id_siswa,
            'tanggal_pinjam'    =>$req->tanggal_pinjam,
            'tanggal_kembali'   =>$req->tanggal_kembali,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

}
