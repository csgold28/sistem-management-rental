<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaranprojects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->bigInteger('nilai');
            $table->text('keterangan')->nullable();
            $table->string('status')->default('Pending')->comment('Pending, Approve, Reject');
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
        Schema::dropIfExists('pengeluaranprojects');
    }
}
