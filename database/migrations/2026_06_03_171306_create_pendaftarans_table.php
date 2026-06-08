<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            //identitas santri
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('NIK');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan');
            $table->string('no_wa');
            $table->string('alamat');
            $table->date('tanggal_masuk');

            //identitas orang tua/wali santri
            $table->string('no_kk');
            $table->string('nama_ayah');
            $table->string('no_nik_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->enum('pendidikan_ayah',['SD/MI/Sederajat', 'SMP/MTS/Sederajat', 'SMA/SMK/MA/KMI/Sederajat', 'Diploma/S1', 'S2', 'S3']);
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('no_nik_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->enum('pendidikan_ibu',['SD/MI/Sederajat', 'SMP/MTS/Sederajat', 'SMA/SMK/MA/KMI/Sederajat', 'Diploma/S1', 'S2', 'S3']);
            $table->string('pekerjaan_ibu');
            $table->string('pendapatan_ortu');
            $table->string('no_wa_ortu');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
