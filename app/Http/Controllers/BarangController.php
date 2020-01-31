<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    //
    public function barang(){

    $data = Barang::all();
    return view('barang',compact('data'));
    }
}

