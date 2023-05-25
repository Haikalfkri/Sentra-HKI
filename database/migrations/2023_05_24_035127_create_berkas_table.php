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
            $table->string('nama_berkas', 256);
            $table->string('file_path')->nullable();
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
