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
        Schema::create('penerima_bantuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masyarakat')->unique();
            $table->unsignedBigInteger('id_bantuansosial')->unique();
            $table->date('tanggal_penerimaan');
            $table->enum('status_verifikasi', ['Terverifikasi', 'Belum diverifikasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_bantuans');
    }
};
