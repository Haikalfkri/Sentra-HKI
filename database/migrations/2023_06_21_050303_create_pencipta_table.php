<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenciptaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencipta', function (Blueprint $table) {
            $table->increments('id_pencipta');
            $table->string('email', 50);
            $table->string('nik', 20);
            $table->string('nama', 50);
            $table->string('no_hp', 20);
            $table->unsignedInteger('id_pengajuanhki');

            $table->foreign('id_pengajuanhki')->references('id_pengajuanhki')->on('pengajuan_hki')->onDelete('cascade');
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
        Schema::table('pencipta', function (Blueprint $table) {
            $table->dropForeign('pencipta_id_pengajuanhki_foreign');
        });

        Schema::dropIfExists('pencipta');
    }
}
