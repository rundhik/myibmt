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
            $table->integer('kelas_perkuliahan_id')->unsigned();
            $table->string('nm_kelas')->nullable();
            $table->integer('dosen_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            $table->date('hari')->nullable();
            $table->dateTime('jam')->nullable();
            $table->integer('jml_peserta')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kelas_perkuliahan_id')
                ->references('id')
                ->on('kelas_perkuliahans')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('dosen_id')
                ->references('id')
                ->on('dosens')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ruang_id')
                ->references('id')
                ->on('ruang_perkuliahans')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
