<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::basic
Route::get ('Halo', function ()
{
        return 'Hallo ini aplikasi travel pertama saya'.
                'laravel is magis Framework';
});
Route::get ('Halo', function ()
{
    return '<h1>Hallo</h1>'
    .'Selamat Datang di App Pertama Saya<br>'
    .'Laravel Memang Keren';
});

//Profil Pribadi
//Route::basic
Route::get ('Profil', function ()
{
        return 'Hallo ini aplikasi travel pertama saya'.
                'laravel is magis Framework';
});
Route::get ('Profil', function ()
{
    return '<h1>Profil</h1>'
    .'Nama : Santia<br>'
    .'Tempat Tanggal Lahir : Bandung,9,September,2003<br>'
    .'Alamat : Kp.Cilisung<br>'
    .'Hoby : Badminton<br>'
    .'Umur : 16 thn';
});

//Biodata parameter
Route::get ('Biodata/{nama}/{Alamat}/{Tgllahir} ', function ($a,$b,$c)
{
    return 'Nama : '.$a
        .'<br>Alamat : '.$b
        .'<br>tgl lahir : '.$c;
});


//Route Opisional Parameter
Route::get ('Pesan/{a?}/{b?}{hrg}', function ($mkn=null,$nmn=null,$hrg=null){
    if (isset($mkn)){
        $mkn = "Anda Memesan $mkn";
        echo $mkn;
    }

    if (isset($nmn)){
        $nmn = "& $nmn";
        echo $nmn;
    }
    if (!$mkn && !$nmn){
        return 'Anda Belum Memesan Sesuatu';
    }
        if(isset($hrg)){
            $Size =" Dengan Harga $ " .$hrg;
            echo "$hrg";

            if($hrg<=0){
                echo "Harga Tidak Valid";
            }
            elseif ($hrg >= 25000) {
                echo "dan size medium";
            }
            elseif ($hrg <25000) {
                echo "dan size small";
            }
        }
});

//Route Opisional Parameter Umur
Route::get ('tni/{nama?}/{beratbadan?}/{umur?} ', function ($a=null,$b=null,$c=null){

    if (isset($a)){
        $a = "Nama Anda : $a<br>";
        echo $a;
    }

    if (isset($b)){
        $h = "Berat Badan : $b<br>";
        echo $h;
    }

     if (isset($c)){
        $v = "Umur : $c tahun<br>";
        echo $v;
    }
    if(isset($b)){

            if ($b >= 76) {
                echo "Anda Harus Menurunkan Berat Badan";
            }
            else if ($b >= 100) {
                echo "Anda Harus Menurunkan Berat Badan";
            }
            elseif ($b < 50 ) {
                echo "Anda Kurang Nutrisi";
            }
        }
        if (!$c && !$b){
             if ($c = 30 >= 40) {
                echo "Perwira";
            }
            else if ($c = 40 >= 50) {
                echo "Laksamana";
            }
            elseif ($c = 60 ) {
                echo "Jendral";
        }
    }
});

//akses model post
Route::get('testmodel1',function()
{
    $query = App\pot::all();
    return $query;

});

//mencari berdasarkan id
Route::get('testmodel2',function()
{
    $query = App\pot::find(1);
    return $query;
});

//mencari berdasarkan tiitle
    Route::get('testmodel3',function()
    {
    $query = App\pot::where('title','like','%cepat nikah%')->get();
    });


//mengubah record
    Route::get('testmodel4',function()
    {
    $query = $pot = App\pot::find(1);
    $pot->title = "Ciri Keluarga Sakinah";
    $pot->save();
    return $pot;
    });


    //menghapus
    Route::get('testmodel5',function()
    {
    $query = $pot = App\pot::find(1);
    $pot->delete();
    });


    //menambah
    Route::get('testmodel6',function()
    {
    $query = $pot = new App\pot;
    $pot->title = "7 Amalan Pembuka Jodoh";
    $pot->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $pot->save();
    return $pot;
    });


    //tugas
    Route::get('produk',function()
    {
        $data = App\produk::all()
        ->take(3);
        return $data;
    });
    Route::get('produk/select',function()
{
    $data =App\produk::select('KategoriProduk','NamaProduk','JenisProduk')->first();
    return $data;
});
    Route::get('produk/{KategoriProduk}/{NamaProduk}/{JenisProduk}/{Jumlah}/{HargaProduk}/{Kualitas}/{Alamat}',function($KategoriProduk,$NamaProduk,$JenisProduk,$Jumlah,$HargaProduk,$Kualitas,$Alamat){
    $produk = new App\produk;
    $produk->KategoriProduk = $KategoriProduk;
    $produk->NamaProduk = $NamaProduk;
    $produk->JenisProduk = $JenisProduk;
    $produk->Jumlah = $Jumlah;
    $produk->HargaProduk = $HargaProduk;
    $produk->Kualitas = $Kualitas;
    $produk->Alamat = $Alamat;
    $produk->save();
    return $produk;
    });


//Controller
    Route::get('latihan','LatihanController@halo');
    Route::get('tambah','LatihanController@tambah');
    Route::get('kurang','LatihanController@kurang');
    Route::get('kali','LatihanController@kali');
    Route::get('bagi','LatihanController@bagi');
    Route::get('param','LatihanController@param');
    Route::get('data-1','LatihanController@loop');
    Route::get('karyawan','LatihanController@gaji');

//Route TABUNGAN
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id?}','TabunganController@show');
Route::get('tabungan-tambah/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-edit/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@update');
Route::get('tabungan-delete/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@delete');

//Route Costumer
Route::get('costumer','CostumerController@index');
Route::get('costumer/{id?}','CostumerController@show');
Route::get('costumer-tambah/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CostumerController@store');
Route::get('costumer-edit/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CostumerController@update');
Route::get('costumer-delete/{id}/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CostumerController@delete');
