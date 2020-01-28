<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function halo()
{
    return 'Hallo Nama Saya : Santia';

}


    public function tambah()
    {
        $a = 20; $b = 20;
    $c = $a + $b ;
    return "$a+$b=$c";
    }
      public function kurang()
    {
        $a = 20; $b = 10;
    $c = $a - $b ;
    return "$a-$b=$c";
    }
      public function kali()
    {
        $a = 5; $b = 5;
    $c = $a * $b ;
    return "$a*$b=$c";
    }
      public function bagi()
    {
        $a = 9; $b = 3;
    $c = $a / $b ;
    return "$a/$b=$c";
    }



    public function pertambahan($a=0, $b=0)
    {
        $c = $a + $b;
        return "$a+$b=$c";
    }
    public function loop()
    {
        $data = [
            ['Nama'=>'Memet',' kelas'=>'XI-RPL-1',' uang_jajan'=>10000],
            ['Nama'=>'Nunung',' kelas'=>'XI-RPL-2',' uang_jajan'=>25000],
            ['Nama'=>'Euis',' kelas'=>'XI-RPL-3',' uang_jajan'=>50000],
            ['Nama'=>'Tati',' kelas'=>'XI-TKR-1',' uang_jajan'=>10000],
            ['Nama'=>'Nina',' kelas'=>'XI-TKR-1',' uang_jajan'=>25000]
        ];
        foreach($data as $val => $key){
        if ($key[' uang_jajan']>=50000) {
            $tu = $key[' uang_jajan']*25/100;
            $total = $key[' uang_jajan']-$tu;
        }
        elseif($key[' uang_jajan']>=25000){
            $tu = $key[' uang_jajan']*15/100;
            $total = $key[' uang_jajan']-$tu;
        }
        elseif($key[' uang_jajan']>=10000){
            $tu = $key[' uang_jajan']*10/100;
            $total = $key[' uang_jajan']-$tu;
        }
        else {
            $tu = 0;
            $total = $key[' uang_jajan'];
        }
            echo "Nama : ". $key['Nama'].
            " kelas :". $key[' kelas'].
            " uang_jajan :". $total,
            " uang_Tabungan : ".$tu,
            " Total_uang jajan : ".$key[' uang_jajan'].
            "<hr>";
        }
    }
        public function loop2()
    {
        $data = [
            ['Nama'=>'Memet',' agama'=>'islam',' alamat'=>'bojong',' jenis_kelamin'=>'perempuan','jabatan'=>'manager','jam_kerja'=>8],
            ['Nama'=>'Hodi',' agama'=>'khatolik',' alamat'=>'kopo',' jenis_kelamin'=>'laki-laki','jabatan'=>'sekertaris','jam_kerja'=>10],
            ['Nama'=>'Euis',' agama'=>'budha',' alamat'=>'sayati',' jenis_kelamin'=>'perempuan','jabatan'=>'staf','jam_kerja'=>12]
        ];
        foreach($data as $val => $key){
        if ($key[' manager']>=5000000) {
            $pjk = $key[' manager']*200;
            $total = $key[' manager']*pjk;
        }
    }
}
}
