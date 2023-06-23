<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapPengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_pengajuan', function (Blueprint $table) {
            $table->increments('id_rekappengajuan');
            $table->unsignedInteger('id_pengajuanhki');
            $table->unsignedInteger('id_users');
            $table->unsignedInteger('id_berkas');
            $table->enum('status', ['Belum Lengkap', 'Lengkap', 'Diproses']);
            $table->text('keterangan')->nullable();
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('id_pengajuanhki')->references('id_pengajuanhki')->on('pengajuan_hki')->onDelete('cascade');
            $table->foreign('id_users')->references('id_users')->on('users')->onDelete('cascade');
            $table->foreign('id_berkas')->references('id_berkas')->on('berkas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_pengajuan');
    }
}
