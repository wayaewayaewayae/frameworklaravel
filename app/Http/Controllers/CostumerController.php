<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    //
    //
     public function index(){
        $costumer = \App\Costumer::all();
        return $costumer;
    }

    public function show($id){
        $costumer = \App\Costumer::find($id);
        return $costumer;
    }

      public function store($code,$nama,$email,$country,$city,$address,$contact)
      {
        $costumer = new Costumer();
        $costumer->code = $code;
        $costumer->nama = $nama;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->$city = $city;
        $costumer->$address = $address;
        $costumer->$contact = $contact;
        $costumer->save();
        return $costumer;
}
    public function update($id,$code,$nama,$email,$country,$city,$address,$contact)
    {
       $costumer = new Costumer();
        $costumer->code = $code;
        $costumer->nama = $nama;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->$city = $city;
        $costumer->$address = $address;
        $costumer->$contact = $contact;
        $costumer->save();
        return $costumer;
}

 public function delete($id)
 {
        $costumer = Costumer::find($id);
        $costumer->delete();
        return $costumer;
 }
}
