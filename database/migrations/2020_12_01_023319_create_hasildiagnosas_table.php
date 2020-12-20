<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasildiagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasildiagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('kode');
            $table->string('nama');
            $table->float('kepercayaan');
            $table->text('penanganan');
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
        Schema::dropIfExists('hasildiagnosas');
    }
}
