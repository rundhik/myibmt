<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->date('hari');
            $table->datetime('jam');
            $table->integer('jml_peserta');
            $table->integer('status')->nullable();
            $table->integer('matakuliah_id')->unsigned();
            $table->integer('dosen_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliahs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ruang_id')->references('id')->on('ruang_perkuliahans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
