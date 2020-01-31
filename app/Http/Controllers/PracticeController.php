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

        return view('latihan2',['data'=>$siswa]);
    }

        public function pass3($id)
        {
            $tabungan = Tabungan::findOrFail($id);
            return view('latihan3',compact('tabungan'));
        }
    }
