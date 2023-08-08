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
        Schema::create('jenis_alat_disewas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('uuid_pesanan')->nullable();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->string('jumlah')->nullable();
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
        Schema::dropIfExists('jenis_alat_disewas');
    }
};
