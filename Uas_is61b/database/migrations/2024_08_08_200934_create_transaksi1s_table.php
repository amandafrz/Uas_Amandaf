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
        Schema::create('transaksi1s', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->Integer('karyawans_id');
            $table->string('nofak');
            $table->date('tanggal');
            $table->Integer('produks_id');
            $table->Integer('jumlah');
            $table->Integer('harga');
            $table->Integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi1s');
    }
};
