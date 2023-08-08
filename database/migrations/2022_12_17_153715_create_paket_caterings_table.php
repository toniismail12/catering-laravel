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
        Schema::create('paket_caterings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('nama')->nullable();
            $table->string('paket')->nullable();
            $table->string('kategori')->nullable();
            $table->text('descripsi')->nullable();
            $table->string('harga')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('paket_caterings');
    }
};
