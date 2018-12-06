<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_mk')->nullable()->unique();
            $table->string('nm_matakuliah')->nullable();
            $table->integer('sks');
            $table->integer('prodi_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('prodi_id')->references('id')->on('program_studis')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('kurikulum_matakuliah', function (Blueprint $table) {
            $table->integer('kurikulum_id')->unsigned();
            $table->integer('matakuliah_id')->unsigned();
            
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliahs')->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['kurikulum_id', 'matakuliah_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliahs');
    }
}
