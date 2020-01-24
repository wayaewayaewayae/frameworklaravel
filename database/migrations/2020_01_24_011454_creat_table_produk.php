<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTableproduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('KategoriProduk');
            $table->string('NamaProduk');
            $table->string('JenisProduk');
            $table->integer('Jumlah');
            $table->integer('HargaProduk');
            $table->string('Kualitas');
            $table->text('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
