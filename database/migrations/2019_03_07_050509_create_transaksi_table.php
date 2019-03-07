<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idFilm');
            $table->string('namaPeminjam');
            $table->string('noKtp');
            $table->string('fotoKtp');
            $table->string('status');
            $table->double('harga');
            $table->string('tglInput');
            $table->string('tglKembali');
            $table->string('tglPinjam');
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
        Schema::dropIfExists('transaksi');
    }
}
