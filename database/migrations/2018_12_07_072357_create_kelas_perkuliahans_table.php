<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasPerkuliahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_perkuliahans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kurikulum_id')->unsigned();
            $table->integer('matakuliah_id')->unsigned();
            $table->integer('semester')->nullable(); 
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliahs')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_perkuliahans');
    }
}
