<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPengajuanhki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_hki', function (Blueprint $table) {
            $table->increments('id_pengajuanhki');
            $table->unsignedInteger('iduser_profile');
            $table->unsignedInteger('id_users');
            $table->date('tgl_pengajuan');
            $table->string('judul_hki', 256);
            $table->text('deskripsi');
            $table->enum('jenis_hki', ['hak cipta']);
            $table->timestamps();

            $table->foreign('iduser_profile')->references('iduser_profile')->on('user_profile')->onDelete('cascade');
            $table->foreign('id_users')->references('id_users')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pengajuanhki');
    }
}
