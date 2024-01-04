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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tu_id')->nullable()->references('id')->on('users');
            $table->foreignId('guru_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('barang_id')->references('id')->on('barangs')->onDelete('cascade');
            $table->string('nama_barang');
            $table->integer('jumlah_unit')->length('2');
            $table->string('keperluan', 100);
            $table->string('gambar_request')->nullable();
            $table->enum('status', ['menunggu', 'terima', 'tolak']);
            $table->string('catatan', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
