<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->increments('id_berkas');
            $table->unsignedInteger('id_pengajuanhki');
            $table->string('file_path')->nullable();
            $table->string('formulir_pendaftaran')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->string('surat_pengalihan')->nullable();
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('contoh_ciptaan')->nullable();
            $table->timestamps();

            $table->foreign('id_pengajuanhki')->references('id_pengajuanhki')->on('pengajuan_hki')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas');
    }
}
