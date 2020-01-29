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

    public function gaji(){
        $data = [
            ['Nama'=>'Ijul','Agama'=>'Islam','Alamat'=>'Cilisung','Jenis_kelamin'=>'Laki-Laki','Jbtn'=>'Manager','Jam_kerja'=>350],
            ['Nama'=>'Santia','Agama'=>'Islam','Alamat'=>'Bandung','Jenis_kelamin'=>'Perempuan','Jbtn'=>'Sekretaris','Jam_kerja'=>250],
            ['Nama'=>'Memet','Agama'=>'Kristen','Alamat'=>'Sekeawi','Jenis_kelamin'=>'Laki-Laki','Jbtn'=>'Staff','Jam_kerja'=>200],
        ];
        foreach ($data as $val => $key) {
            echo 'Nama : '.$key['Nama'].'<br>'.
                'Agama : '.$key['Agama'].'<br>'.
                'Alamat : '.$key['Alamat'].'<br>'.
                'Jenis Kelamin : '.$key['Jenis_kelamin'].'<br>'.
                'Jabatan : '.$key['Jbtn'].'<br>'.
                'Jam Kerja : '.$key['Jam_kerja'].'<br>';

                //Jabatan
            if ($key['Jbtn'] == "Manager") {
                $gaji = 5000000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['Jbtn'] == "Sekretaris") {
                $gaji = 3500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['Jbtn'] == "Staff") {
                $gaji = 2500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }

            //Jamkerja
            if ($key['Jam_kerja'] >= 250) {
                $bonus = $gaji*10/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            elseif ($key['Jam_kerja'] >= 200) {
                $bonus = $gaji*5/100;
                echo 'Bonus : '.$bonus.'<br>';
            }

            //Output
            $gaji_bersih = $gaji+$bonus;
            $ppn = $gaji_bersih*2.5/100;
            echo 'PPN : Rp. '.$ppn.'<br>';
            $total_gaji = $gaji_bersih - $ppn;
            echo 'Total Gaji : Rp. '.$total_gaji.'<hr>';
        }
    }
}
