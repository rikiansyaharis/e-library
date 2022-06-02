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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pinjam');
            $table->foreignId('id_buku');
            $table->foreignId('id_pengurus');
            $table->date('tanggal_kembali');
            $table->timestamps();

            $table->foreign('id_buku')->references('id')->on('detail_bukus');
            $table->foreign('id_pengurus')->references('id')->on('penggunas');
            $table->foreign('id_pinjam')->references('id')->on('pinjams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
};
