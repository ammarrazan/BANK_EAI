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
        Schema::create('RentalMobil',function (Blueprint $table) {
            $table->id ();
            $table->integer('rekening');
            $table->string('jenisKartuKredit');
            $table->string ('jenisTabungan');
            $table->float('nominal');
            $table->string('nama');
            $table->float('saldo');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_mobil');
    }
};