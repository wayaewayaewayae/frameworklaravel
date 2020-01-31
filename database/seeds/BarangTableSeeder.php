<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           $posts = [
            ['Code_barang'=>'890', 'Nama_barang'=>'tas','Tipe_barang'=>'made in Cina','Harga_barang'=>200000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>1230000],
            ['Code_barang'=>'786', 'Nama_barang'=>'baju','Tipe_barang'=>'made in Cina','Harga_barang'=>300000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>500000],
            ['Code_barang'=>'654', 'Nama_barang'=>'sepatu','Tipe_barang'=>'made in Cina','Harga_barang'=>400000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>700000],
            ['Code_barang'=>'321', 'Nama_barang'=>'lemari','Tipe_barang'=>'made in Cina','Harga_barang'=>800000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>2000000],
            ['Code_barang'=>'432', 'Nama_barang'=>'laptop','Tipe_barang'=>'made in Cina','Harga_barang'=>200000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>4500000],
            ['Code_barang'=>'123', 'Nama_barang'=>'sandal','Tipe_barang'=>'made in Cina','Harga_barang'=>700000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>3400000],
            ['Code_barang'=>'321', 'Nama_barang'=>'celana','Tipe_barang'=>'made in Cina','Harga_barang'=>340000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>1200000],
            ['Code_barang'=>'654', 'Nama_barang'=>'kerudung','Tipe_barang'=>'made in Cina','Harga_barang'=>500000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>1000000],
            ['Code_barang'=>'897', 'Nama_barang'=>'komputer','Tipe_barang'=>'made in Cina','Harga_barang'=>400000,'Deskripsi'=>'masih baru','Qty'=>12,'Total_harga'=>4500000],
        ];
            // masukkan data ke database
            DB::table('barangs')->insert($posts);
    }
}
