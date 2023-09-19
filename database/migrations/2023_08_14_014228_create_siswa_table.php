<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // $table->id();
            $table->integer('nis');
            $table->string('nama');
            $table->string('kelas');
            $table->enum('jk',['L','P']);
            $table->string('no_hp');
            $table->text('alamat');
            $table->timestamps();
            $table->primary('nis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
