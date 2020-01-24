<?php

use Illuminate\Database\Seeder;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tugas
         $produk = [
            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 4,'HargaProduk'=> 50000,'Kualitas'=>'Baru','Alamat'=>'Kp.Cilisung'],            ['KategoriProduk'=>'Fashion', 'NamaProduk'=>'Baju','JenisProduk'=>'Katun','Jumlah'=> 3,'HargaProduk'=> 1.500000,'Kualitas'=>'Baru','Alamat'=>'Cirebon'],
            ['KategoriProduk'=>'Fashion', 'NamaProduk'=>'Celana','JenisProduk'=>'jeans','Jumlah'=> 3,'HargaProduk'=> 150000,'Kualitas'=>'Baru','Alamat'=>'Kp.salak'],            ['KategoriProduk'=>'minuman', 'NamaProduk'=>'jus jeruk','JenisProduk'=>'cair','Jumlah'=> 10,'HargaProduk'=> 140000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 2,'HargaProduk'=> 6000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 5,'HargaProduk'=> 7000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 6,'HargaProduk'=> 15000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 1,'HargaProduk'=> 20000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'MakeUp', 'NamaProduk'=>'Lipstik','JenisProduk'=>'Padat','Jumlah'=> 8,'HargaProduk'=> 12000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka'],            ['KategoriProduk'=>'Mmakanan', 'NamaProduk'=>'kentang','JenisProduk'=>'Makanan','Jumlah'=> 1,'HargaProduk'=> 5000,'Kualitas'=>'Baru','Alamat'=>'Kp.bojong malaka']
        ];
         // masukkan data ke database
            DB::table('produk')->insert($produk);
    }
}

