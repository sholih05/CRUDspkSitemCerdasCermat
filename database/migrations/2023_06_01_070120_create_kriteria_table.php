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
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->integer('pkn');
            $table->integer('bhs_indo');
            $table->integer('mtk');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('bhs_ingris');
            $table->integer('rata-rata_rpot');
            $table->integer('absensi');
            $table->String('dokumen_pendukung');
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
        Schema::dropIfExists('kriteria');
    }
};
