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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masyarakat')->nullable();
            $table->unsignedBigInteger('id_bantuansosial')->nullable();
            // Kolom dari tabel Masyarakat
            $table->string('nama');
            $table->string('nik');
            $table->string('no_kk');
            $table->text('alamat');
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('status_ekonomi');
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kk')->nullable();
            
            // Kolom dari tabel BantuanSosial
            $table->string('jenis_bantuan');
            $table->date('tanggal_penyaluran');
            $table->integer('jumlah_bantuan');
            $table->string('sumber_dana');
            $table->text('syarat_penerima');

            // Kolom dari tabel PenerimaBantuan
            $table->date('tanggal_penerimaan');
            $table->string('status_verifikasi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
