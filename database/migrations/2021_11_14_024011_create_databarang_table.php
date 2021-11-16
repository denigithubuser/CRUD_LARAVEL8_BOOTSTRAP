<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databarang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Barang');
            $table->integer('stok');
            $table->integer('Jumlah_Terjual');
            $table->date('Tanggal_Transaksi');
            $table->string('Jenis_Barang');
            $table->softDeletes();
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
        Schema::dropIfExists('databarang');
    }
}
