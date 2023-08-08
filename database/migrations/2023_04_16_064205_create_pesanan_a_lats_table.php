<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_a_lats', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('nohp')->nullable();
            $table->string('kategori')->nullable();
            $table->text('alamat')->nullable();
            $table->string('tanggal_pengambilan')->nullable();
            $table->string('tanggal_pemesanan')->nullable();
            $table->string('metode_pickup')->nullable();
            $table->string('status')->nullable();
            $table->string('kode_pesanan')->nullable();
            $table->string('bukti_bayar')->nullable();
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
        Schema::dropIfExists('pesanan_a_lats');
    }
};
