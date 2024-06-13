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
            $table->string('kategori');
            $table->integer('jumlah');
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
