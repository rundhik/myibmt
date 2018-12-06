<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKurikulumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_kurikulum')->nullable()->unique();
            $table->integer('thn_semester_id')->unsigned();
            $table->integer('kode_prodi_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('kode_prodi_id')->references('id')->on('program_studis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('thn_semester_id')->references('id')->on('tahun_semesters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurikulums');
    }
}
