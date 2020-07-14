<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_permohonan')->unsigned();
            $table->foreign('jenis_permohonan')->references('id')->on('jenis_permohonan');
            $table->string('kelas_permohonan');
            $table->string('nama');
            $table->string('no_ic')->nullable();
            $table->string('passport')->nullable();
            $table->mediumText('alamat');
            $table->string('no_phone');
            $table->string('nama_syarikat');
            $table->mediumText('alamat_premis');
            $table->string('no_perakuan');
            $table->string('no_lesen')->nullable();
            $table->date('tarikh');
            $table->date('tarikh1');
            $table->string('setuju');
            $table->string('catatan')->nullable();
            $table->bigInteger('status_permohonan_id')->unsigned();
            $table->foreign('status_permohonan_id')->references('id')->on('status');
            $table->string('passport1')->nullable();
            $table->string('surat_rayuan')->nullable($value = true);
            $table->string('salinan_ic')->nullable($value = true);
            $table->string('salinan_pendaftaran_syarikat')->nullable($value = true);
            $table->string('memorandum')->nullable($value = true);
            $table->string('borang21_44_49')->nullable($value = true);
            $table->string('notis_iklan')->nullable($value = true);
            $table->string('iklan_5_minggu')->nullable($value = true);
            $table->string('salinan_id_sst')->nullable($value = true);
            $table->string('surat_permohonan_lesen')->nullable($value = true);
            $table->string('lesen_jualan')->nullable($value = true);
            $table->string('pelan_lokasi')->nullable($value = true);
            $table->string('gambar_3r_premis')->nullable($value = true);
            $table->string('peraturan')->nullable($value = true);
            $table->string('jenayah')->nullable($value = true);
            $table->string('lain')->nullable($value = true);
            $table->string('no_rujukan')->nullable();
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
        Schema::dropIfExists('permohonan');
    }
}
