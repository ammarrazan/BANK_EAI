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
        Schema::create('asuransi',function (Blueprint $table) {
            $table->id ();
            $table->bigInteger('rekening');
            $table->string('nama');
            $table->string('jenis_nasabah');
            $table->string('jenis_tabungan');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->date('active_date');
            $table->date('expired');
            $table->float('saldo');
            $table->float('tagihan');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asuransi');
    }
};
