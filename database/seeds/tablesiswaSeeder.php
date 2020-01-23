<?php

use Illuminate\Database\Seeder;

class tablesiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = [
            ['Nis'=>'002710', 'Nama'=>'Santia','JenisKelamin'=>'Perempuan','Alamat'=>'Cilisung','TanggalLahir'=>'09','Umur'=>16]
        ];
            // masukkan data ke database
            DB::table('siswa')->insert($siswa);
    }
}
