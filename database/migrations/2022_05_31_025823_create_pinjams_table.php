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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal_pinjam');
            $table->foreignId('id_anggota');
            $table->foreignId('id_pengurus');
            $table->foreign('id_anggota')->references('id')->on('anggotas');
            $table->foreign('id_pengurus')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
};
