<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->bigInteger('nilai');
            $table->string('name_client')->nullable();
            $table->text('alamat_client')->nullable();
            $table->string('kontak_client')->nullable();
            $table->string('ktp_client')->nullable();
            $table->string('foto_ktp_client')->nullable();
            $table->string('npwp_client')->nullable();
            $table->string('foto_npwp_client')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('teknisi_loadingan')->nullable();
            $table->integer('teknisi_bongkaran')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
