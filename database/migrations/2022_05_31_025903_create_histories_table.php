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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anggota');
            $table->foreignId('id_buku');
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('anggotas');
            $table->foreign('id_buku')->references('id')->on('detail_bukus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
