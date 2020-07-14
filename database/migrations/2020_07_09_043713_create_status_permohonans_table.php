<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_permohonans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('permohonan_id')->unsigned();
            $table->foreign('permohonan_id')->references('id')->on('permohonan');
            $table->string('nama_staff')->nullable();
            $table->string('status');
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('status_permohonans');
    }
}
