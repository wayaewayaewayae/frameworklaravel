<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    //
    public function pass()
    {
        $data = "Santia";
        return view('latihan',compact('data'));

    }
    public function pass2()
    {
        $siswa = [
            ['nama'=>'santia','kelas'=>'XI-rpl-1'],
            ['nama'=>'jul','kelas'=>'XI-rpl-1']
        ];
        return view('latihan1',['data'=>$siswa]);
    }

        public function pass3()
        {
            $tabungan = Tabungan::all()->take(10);
            return view('latihan2',compact('tabungan'));
        }
    }
