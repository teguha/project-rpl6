<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpacarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upacara', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('banjar_id');
            $table->string('kegiatan', 100);
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat', 50);
            $table->string('ketentuan', 150);
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
        Schema::dropIfExists('upacara');
    }
}
