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
