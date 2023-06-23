<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisSubjenisToPengajuanHkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_hki', function (Blueprint $table) {
            $table->string('jenis_ciptaan');
            $table->string('subjenis_ciptaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengajuan_hki', function (Blueprint $table) {
            $table->dropColumn('jenis_ciptaan');
            $table->dropColumn('subjenis_ciptaan');
        });
    }
}

