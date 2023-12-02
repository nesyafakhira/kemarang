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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 10);
            $table->integer('jumlah_unit')->length(3);
            $table->string('satuan', 7);
            $table->integer('harga_satuan');
            $table->integer('total_harga_tanpa_ppn');
            $table->integer('ppn');
            $table->integer('total_harga_ppn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_barang');
    }
};
