<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TAbungan;
class Tabungan extends Model
{
    //
    public function index(){
        $tabungan = \App\Tabungan::all();
        return $tabungan;
    }

    public function show($id){
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }
        public function store(){
        $tabungan = new Tabungan;
        $tabungan->nis = "2710";
        $tabungan->nama = "Santia";
        $tabungan->kelas = "XI-RPL-1";
        $tabungan->jml = "100000";
        $tabungan->save();
        return $tabungan;
}
}
